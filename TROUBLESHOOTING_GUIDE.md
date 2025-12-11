# Troubleshooting Guide: Why Updates Aren't Showing

If you are seeing "old" content on your live site (`psdx6njvjl.wpdns.site`) even though we pushed updates to GitHub, or if you are clicking links and getting "404 Not Found" errors, follow this guide.

## 1. The "Pipeline" Problem (Why code isn't showing)

There is a chain of command for your code:
1.  **Antigravity (Me)**: I write code on your machine.
2.  **GitHub**: I push that code to the cloud (the `bullmight703A/hyper-kidazzle-site` repository).
3.  **Your Website Host**: It needs to "pull" or "download" that code from GitHub to show it to the world.

**The Break:** Right now, step 3 is not happening automatically. Your website host doesn't know there is new code on GitHub.

### How to Fix It
Since I don't have access to your hosting dashboard, you need to trigger this update.
*   **If you are using "LocalWP" or "Flywheel":** Look for a "Push to Live" or "Pull from GitHub" button in your hosting dashboard.
*   **If you are using a standard host:** You might need to manually upload the files, or install a plugin like **WP Pusher** or **GitHub Updater** on your WordPress site to connect it to the repository.
*   **The "Manual" Fail-Safe:**
    1.  Download the `wordpress-theme` folder from your computer.
    2.  Use an **FTP Client** (like FileZilla) or a **File Manager Plugin** on your site.
    3.  Upload the contents of `wordpress-theme` into `/wp-content/themes/kidazzle-premium/`.

---

## 2. The "404 Not Found" Problem (Why links are broken)

Even when the code is updated, WordPress needs "Pages" to exist in its database to know what to display.
*   **The Code:** We created templates (like `page-locations.php`).
*   **The Database:** WordPress is looking for a page with the *slug* `locations`. If that page doesn't exist in the dashboard, WordPress shows a 404 error, even if the template file is perfect.

### How to Fix It (Required for ALL new pages)
Log in to your WordPress Admin (`/wp-admin`) and do this for **every** new link we added:

1.  Go to **Pages > Add New**.
2.  **Title:** Enter the name (e.g., "Locations").
3.  **Slug (URL):** Ensure the permalink ends in `/locations/` (or `/acquisitions/`, `/careers/`, etc.).
    *   *Note:* You verify this in the "URL" or "Permalink" settings on the right sidebar.
4.  **Template:** (Optional) If you see a "Template" dropdown on the right, ensure it's set to "Default Template" (WordPress should automatically pick `page-locations.php` if the slug matches) OR select the specific template if listed.
5.  **Click Publish.**
6.  **Repeat** for:
    *   `locations`
    *   `acquisitions`
    *   `careers`
    *   `programs`
    *   `curriculum`
    *   `resources`
    *   `teacher-portal`
    *   `about` (create as "About Us", slug `about`)
    *   `contact` (create as "Contact Us", slug `contact`)

---

## 3. The "Lint Errors" (Red underlines in your editor)
You saw errors like: `Call to unknown function: 'get_header'`.
*   **Status: IGNORE.**
*   **Reason:** Your code editor (VS Code) sees a single PHP file and doesn't know it belongs to WordPress, so it thinks functions like `get_header()` don't exist. They *do* exist on your real website. These are "false alarms."
