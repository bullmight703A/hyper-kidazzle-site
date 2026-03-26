<?php
/**
 * Template Name: Brigance Console
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brigance Console</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/react@18/umd/react.production.min.js"></script>
    <script src="https://unpkg.com/react-dom@18/umd/react-dom.production.min.js"></script>
    <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
    <style>
        body { margin: 0; background-color: #0A0F1C; font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif; }
        .custom-scrollbar::-webkit-scrollbar { width: 4px; }
        .custom-scrollbar::-webkit-scrollbar-track { background: transparent; }
        .custom-scrollbar::-webkit-scrollbar-thumb { background-color: #1e293b; border-radius: 20px; }
    </style>
</head>
<body>
    <div id="root"></div>
    <script>
        window.WP_THEME_URL = "<?php echo get_template_directory_uri(); ?>";
    </script>
    <script type="text/babel">
        


const App = () => {
  const [activeIframe, setActiveIframe] = useState('');
  const [ghlMessages, setGhlMessages] = useState([
    { sender: 'GHL AI', text: 'Standing by. Standard lead nurturing models active.', type: 'ai' }
  ]);
  const [briganceMessages, setBriganceMessages] = useState([
    { sender: 'Brigance AI', text: 'Childhood development & milestone models initialized. Awaiting assessment data.', type: 'ai' }
  ]);
  
  const tools = [
    { id: 'tool1', name: 'Kid 2026', url: window.WP_THEME_URL + '/assets/brigance-pdfs/Kid%202026.pdf' },
    { id: 'tool2', name: 'Brigance Assessment', url: window.WP_THEME_URL + '/assets/brigance-pdfs/brigance.pdf' },
    { id: 'tool3', name: 'Transition Skills', url: window.WP_THEME_URL + '/assets/brigance-pdfs/brigance-transition-skills-inventory.pdf' },
    { id: 'tool4', name: 'Screens III Manual', url: window.WP_THEME_URL + '/assets/brigance-pdfs/ScreensIII-Tech-Manual-04.pdf' }
  ];

  return (
    <div className="min-h-screen bg-[#0A0F1C] text-slate-300 font-sans flex flex-col p-4 gap-4 selection:bg-cyan-500/30 overflow-hidden">
      
      {/* HEADER LOGO */}
      <header className="flex items-center justify-between border-b border-white/5 pb-4">
        <div className="flex items-center gap-4">
          <div className="p-3 bg-gradient-to-tr from-cyan-500 to-blue-600 rounded-xl shadow-[0_0_20px_rgba(6,182,212,0.2)]">
            <svg className="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" strokeWidth="2"><path strokeLinecap="round" strokeLinejoin="round" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" /></svg>
          </div>
          <div>
            <h1 className="text-2xl font-black tracking-[-0.05em] text-white">BRIGANCE <span className="text-cyan-400 font-light">INTELLIGENCE</span></h1>
            <p className="text-[10px] uppercase tracking-[0.3em] font-black text-slate-500 mt-1">Summer.Kidazzle <span className="mx-2 text-cyan-500">/</span> Assessment Core</p>
          </div>
        </div>
        <div className="flex gap-4">
           <div className="px-4 py-1.5 bg-blue-500/10 border border-blue-500/20 rounded-lg text-[10px] font-bold text-blue-400 flex items-center gap-2">
              <div className="w-2 h-2 rounded-full bg-blue-500 animate-pulse"></div> GHL Base
           </div>
           <div className="px-4 py-1.5 bg-cyan-500/10 border border-cyan-500/20 rounded-lg text-[10px] font-bold text-cyan-400 flex items-center gap-2">
              <div className="w-2 h-2 rounded-full bg-cyan-500 animate-pulse"></div> Specialized AI
           </div>
        </div>
      </header>

      {/* MAIN LAYOUT */}
      <div className="flex-1 grid grid-cols-12 gap-6 overflow-hidden">
        
        {/* LEFT COLUMN: GHL STANDARD AI */}
        <aside className="col-span-3 flex flex-col gap-4 border border-white/5 bg-[#111625] rounded-2xl p-4 relative overflow-hidden shadow-2xl">
          <div className="absolute top-0 right-0 w-32 h-32 bg-blue-500/10 rounded-full blur-3xl"></div>
          <div className="text-[10px] font-black tracking-widest uppercase text-blue-400 mb-4 border-b border-white/5 pb-2">Model 01: Standard GHL AI</div>
          
          <div className="flex-1 overflow-y-auto space-y-4 custom-scrollbar pr-2 relative z-10">
            {ghlMessages.map((m, i) => (
              <div key={i} className="bg-blue-500/5 border border-blue-500/10 rounded-xl p-4">
                <span className="text-[9px] font-black text-blue-400 uppercase tracking-widest block mb-1">{m.sender}</span>
                <p className="text-xs text-slate-300 leading-relaxed font-medium">{m.text}</p>
              </div>
            ))}
          </div>
          
          <div className="mt-auto relative z-10">
            <div className="flex items-center gap-2 bg-black/40 border border-white/10 rounded-xl p-1.5 focus-within:border-blue-500/50 transition-colors">
              <input type="text" placeholder="Query GHL AI..." className="bg-transparent border-none text-xs text-white px-3 py-2 w-full outline-none placeholder:text-slate-600" />
              <button className="w-8 h-8 rounded-lg bg-blue-500 text-white flex items-center justify-center hover:bg-blue-400">
                <svg className="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
              </button>
            </div>
          </div>
        </aside>

        {/* CENTER COLUMN: BRIGANCE VIEWER (IFRAMES) */}
        <main className="col-span-6 flex flex-col gap-4">
          
          {/* TOOL SELECTOR TABS */}
          <div className="bg-[#111625] border border-white/5 rounded-full p-1.5 flex gap-2 overflow-x-auto shadow-md">
            {tools.map(tool => (
              <button 
                key={tool.id}
                onClick={() => setActiveIframe(tool.url)}
                className={`px-6 py-2.5 rounded-full text-[10px] font-black uppercase tracking-widest whitespace-nowrap transition-all ${activeIframe === tool.url ? 'bg-gradient-to-r from-cyan-500 to-blue-500 text-white shadow-lg' : 'text-slate-500 hover:text-white hover:bg-white/5'}`}
              >
                {tool.name}
              </button>
            ))}
          </div>

          <div className="flex-1 bg-[#111625] border border-white/5 rounded-3xl overflow-hidden relative shadow-2xl flex items-center justify-center group">
            {activeIframe ? (
              <iframe 
                src={activeIframe} 
                className="w-full h-full border-none bg-white"
                title="Brigance Assessment Tool Viewer"
              />
            ) : (
              <div className="text-center space-y-4 relative z-10 w-full h-full flex flex-col items-center justify-center p-8 bg-[#0A0F1C]/50">
                 <div className="w-20 h-20 bg-white/5 rounded-3xl flex items-center justify-center border border-white/10 group-hover:scale-105 transition-transform duration-500">
                    <svg className="w-10 h-10 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth="1" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                 </div>
                 <h2 className="text-lg font-black text-white tracking-tight">BRIGANCE TOOL VIEWER</h2>
                 <p className="text-xs text-slate-500 max-w-sm mx-auto leading-relaxed">Select a milestone assessment or diagnostic tool from the top navigation to load the interactive iframe.</p>
                 <div className="absolute inset-0 border-2 border-dashed border-cyan-500/20 rounded-3xl m-8 pointer-events-none"></div>
              </div>
            )}
          </div>
        </main>

        {/* RIGHT COLUMN: SPECIALIZED AGENT */}
        <aside className="col-span-3 flex flex-col gap-4 border border-white/5 bg-[#111625] rounded-2xl p-4 relative overflow-hidden shadow-2xl">
          <div className="absolute top-0 left-0 w-32 h-32 bg-cyan-500/10 rounded-full blur-3xl"></div>
          <div className="flex justify-between items-center mb-4 border-b border-white/5 pb-2">
            <div className="text-[10px] font-black tracking-widest uppercase text-cyan-400">Model 02: Custom Agent</div>
            <div className="px-2 py-0.5 bg-cyan-500/20 text-cyan-300 rounded text-[8px] font-black tracking-widest">PROPRIETARY</div>
          </div>
          
          <div className="flex-1 overflow-y-auto space-y-4 custom-scrollbar pr-2 relative z-10">
            {briganceMessages.map((m, i) => (
              <div key={i} className="bg-cyan-500/5 border border-cyan-500/10 rounded-xl p-4">
                <span className="text-[9px] font-black text-cyan-400 uppercase tracking-widest block mb-1">{m.sender}</span>
                <p className="text-xs text-slate-300 leading-relaxed font-medium">{m.text}</p>
              </div>
            ))}
          </div>
          
          <div className="mt-auto relative z-10">
            <div className="flex items-center gap-2 bg-black/40 border border-white/10 rounded-xl p-1.5 focus-within:border-cyan-500/50 transition-colors">
              <input type="text" placeholder="Query Milestone Agent..." className="bg-transparent border-none text-xs text-white px-3 py-2 w-full outline-none placeholder:text-slate-600" />
              <button className="w-8 h-8 rounded-lg bg-cyan-500 text-black flex items-center justify-center hover:bg-cyan-400">
                <svg className="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
              </button>
            </div>
          </div>
        </aside>

      </div>
    </div>
  );
};

export default App;


        const root = ReactDOM.createRoot(document.getElementById('root'));
        root.render(<App />);
    </script>
</body>
</html>
