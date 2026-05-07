<?php
/**
 * KIDazzle growth tracking and GHL attribution bridge.
 *
 * External measurement IDs are configurable in the Customizer. The UTM bridge
 * can run without those IDs so form attribution is preserved while analytics
 * credentials are being confirmed.
 *
 * @package kidazzle_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

function kidazzle_growth_tracking_customizer_settings($wp_customize)
{
    $wp_customize->add_section('kidazzle_growth_tracking', array(
        'title' => __('Growth Tracking', 'kidazzle-theme'),
        'description' => __('Google, Meta, Clarity, and GoHighLevel attribution settings for KIDazzle.', 'kidazzle-theme'),
        'priority' => 121,
    ));

    $fields = array(
        'kidazzle_google_ads_id' => array('Google Ads ID', 'Example: AW-123456789'),
        'kidazzle_google_analytics_id' => array('Google Analytics ID', 'Example: G-XXXXXXXXXX'),
        'kidazzle_meta_pixel_id' => array('Meta Pixel ID', 'Numbers only'),
        'kidazzle_clarity_project_id' => array('Microsoft Clarity Project ID', 'Project key only'),
        'kidazzle_google_form_conversion' => array('Google Form Conversion Target', 'Example: AW-123456789/abc123'),
        'kidazzle_google_booking_conversion' => array('Google Booking Conversion Target', 'Example: AW-123456789/abc123'),
        'kidazzle_tracking_cookie_domain' => array('Tracking Cookie Domain', 'Default: .kidazzle.com'),
    );

    foreach ($fields as $setting => $labels) {
        $wp_customize->add_setting($setting, array(
            'default' => $setting === 'kidazzle_tracking_cookie_domain' ? '.kidazzle.com' : '',
            'sanitize_callback' => 'sanitize_text_field',
            'transport' => 'refresh',
        ));

        $wp_customize->add_control($setting, array(
            'label' => __($labels[0], 'kidazzle-theme'),
            'description' => esc_html($labels[1]),
            'section' => 'kidazzle_growth_tracking',
            'type' => 'text',
        ));
    }
}
add_action('customize_register', 'kidazzle_growth_tracking_customizer_settings');

function kidazzle_output_growth_tracking()
{
    if (is_admin()) {
        return;
    }

    $config = array(
        'googleAdsId' => get_theme_mod('kidazzle_google_ads_id', ''),
        'googleAnalyticsId' => get_theme_mod('kidazzle_google_analytics_id', ''),
        'metaPixelId' => get_theme_mod('kidazzle_meta_pixel_id', ''),
        'clarityProjectId' => get_theme_mod('kidazzle_clarity_project_id', ''),
        'formConversionTarget' => get_theme_mod('kidazzle_google_form_conversion', ''),
        'bookingConversionTarget' => get_theme_mod('kidazzle_google_booking_conversion', ''),
        'cookieDomain' => get_theme_mod('kidazzle_tracking_cookie_domain', '.kidazzle.com'),
        'cookiePrefix' => '_kidazzle_',
    );
    ?>
<!-- KIDazzle Growth Tracking + GHL Attribution Bridge -->
<script>
(function () {
  var config = <?php echo wp_json_encode($config); ?>;
  var loaded = { gtag: false, clarity: false, meta: false };
  var cookieDays = 90;
  var captureParams = ["gclid", "gbraid", "wbraid", "fbclid", "utm_source", "utm_medium", "utm_campaign", "utm_content", "utm_term"];

  function setCookie(name, value, days) {
    var d = new Date();
    var domain = config.cookieDomain ? ";domain=" + config.cookieDomain : "";
    d.setTime(d.getTime() + days * 24 * 60 * 60 * 1000);
    document.cookie = name + "=" + encodeURIComponent(value) + ";expires=" + d.toUTCString() + ";path=/" + domain + ";SameSite=Lax";
  }

  function getCookie(name) {
    var match = document.cookie.match("(^|;)\\s*" + name + "\\s*=\\s*([^;]+)");
    return match ? decodeURIComponent(match.pop()) : "";
  }

  captureParams.forEach(function (param) {
    var match = new RegExp("[?&]" + param + "=([^&#]*)").exec(window.location.href);
    if (match) {
      setCookie(config.cookiePrefix + param, decodeURIComponent(match[1].replace(/\+/g, " ")), cookieDays);
    }
  });

  function syncUtmToGhlSession() {
    var utmKeys = ["utm_source", "utm_medium", "utm_campaign", "utm_content", "utm_term"];
    var existing = "";
    try { existing = sessionStorage.getItem("UPS") || ""; } catch (e) {}

    var ups = new URLSearchParams(existing.replace(/^\?/, ""));
    var changed = false;

    utmKeys.forEach(function (param) {
      var value = getCookie(config.cookiePrefix + param);
      if (value && ups.get(param) !== value) {
        ups.set(param, value);
        changed = true;
      }
    });

    if (changed) {
      var query = ups.toString();
      try { sessionStorage.setItem("UPS", query ? "?" + query : ""); } catch (e) {}
    }
  }

  function appendUtmToGhlLinks() {
    var utmKeys = ["utm_source", "utm_medium", "utm_campaign", "utm_content", "utm_term"];
    var parts = [];

    utmKeys.forEach(function (param) {
      var value = getCookie(config.cookiePrefix + param);
      if (value) {
        parts.push(encodeURIComponent(param) + "=" + encodeURIComponent(value));
      }
    });

    if (!parts.length) return;

    document.querySelectorAll('a[href*="leadconnectorhq.com"], a[href*="msgsndr.com"], iframe[src*="leadconnectorhq.com"]').forEach(function (el) {
      var attr = el.tagName.toLowerCase() === "iframe" ? "src" : "href";
      var url = el.getAttribute(attr);
      if (!url || url.indexOf("utm_source") !== -1) return;
      el.setAttribute(attr, url + (url.indexOf("?") === -1 ? "?" : "&") + parts.join("&"));
    });
  }

  function loadGtag() {
    var firstId = config.googleAdsId || config.googleAnalyticsId;
    if (loaded.gtag || !firstId) return;
    loaded.gtag = true;

    var script = document.createElement("script");
    script.async = true;
    script.src = "https://www.googletagmanager.com/gtag/js?id=" + encodeURIComponent(firstId);
    document.head.appendChild(script);

    window.dataLayer = window.dataLayer || [];
    window.gtag = window.gtag || function () { window.dataLayer.push(arguments); };
    window.gtag("js", new Date());

    if (config.googleAdsId) window.gtag("config", config.googleAdsId);
    if (config.googleAnalyticsId) window.gtag("config", config.googleAnalyticsId);
  }

  function loadMetaPixel() {
    if (loaded.meta || !config.metaPixelId) return;
    loaded.meta = true;

    !function (f, b, e, v, n, t, s) {
      if (f.fbq) return;
      n = f.fbq = function () { n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments); };
      if (!f._fbq) f._fbq = n;
      n.push = n; n.loaded = true; n.version = "2.0"; n.queue = [];
      t = b.createElement(e); t.async = true; t.src = v;
      s = b.getElementsByTagName(e)[0]; s.parentNode.insertBefore(t, s);
    }(window, document, "script", "https://connect.facebook.net/en_US/fbevents.js");

    window.fbq("init", config.metaPixelId);
    window.fbq("track", "PageView");
  }

  function loadClarity() {
    if (loaded.clarity || !config.clarityProjectId) return;
    loaded.clarity = true;

    (function (c, l, a, r, i, t, y) {
      c[a] = c[a] || function () { (c[a].q = c[a].q || []).push(arguments); };
      t = l.createElement(r); t.async = true; t.src = "https://www.clarity.ms/tag/" + i;
      y = l.getElementsByTagName(r)[0]; y.parentNode.insertBefore(t, y);
    })(window, document, "clarity", "script", config.clarityProjectId);
  }

  function fireLeadConversion() {
    loadGtag();
    loadMetaPixel();
    if (config.formConversionTarget && typeof window.gtag === "function") {
      window.gtag("event", "conversion", { send_to: config.formConversionTarget, value: 0, currency: "USD" });
    }
    if (typeof window.fbq === "function") {
      window.fbq("track", "Lead");
    }
  }

  function fireBookingConversion() {
    loadGtag();
    loadMetaPixel();
    if (config.bookingConversionTarget && typeof window.gtag === "function") {
      window.gtag("event", "conversion", { send_to: config.bookingConversionTarget, value: 0, currency: "USD" });
    }
    if (typeof window.fbq === "function") {
      window.fbq("track", "Schedule");
    }
  }

  window.addEventListener("message", function (event) {
    if (!event.origin || event.origin.indexOf("leadconnectorhq.com") === -1) return;

    var data = event.data;
    try {
      data = typeof data === "string" ? JSON.parse(data) : data;
    } catch (e) {
      data = {};
    }

    if (data && (data.type === "form_submission" || data.event === "formSubmitted" || data.action === "form_submitted" || data.formSubmitted)) {
      fireLeadConversion();
    }
  });

  document.addEventListener("click", function (event) {
    var link = event.target.closest && event.target.closest('a[href*="leadconnectorhq.com/widget/booking"]');
    if (link) fireBookingConversion();
  }, true);

  syncUtmToGhlSession();
  appendUtmToGhlLinks();

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", appendUtmToGhlLinks);
  }

  if (window.MutationObserver) {
    new MutationObserver(appendUtmToGhlLinks).observe(document.documentElement, { childList: true, subtree: true });
  }

  var fired = false;
  function loadMeasurementScripts() {
    if (fired) return;
    fired = true;
    loadGtag();
    loadMetaPixel();
    setTimeout(loadClarity, 2000);
  }

  ["mousedown", "mousemove", "touchstart", "scroll", "keydown"].forEach(function (eventName) {
    document.addEventListener(eventName, loadMeasurementScripts, { once: true, passive: true });
  });
  setTimeout(loadMeasurementScripts, 3000);
})();
</script>
<!-- End KIDazzle Growth Tracking + GHL Attribution Bridge -->
    <?php
}
add_action('wp_head', 'kidazzle_output_growth_tracking', 3);
