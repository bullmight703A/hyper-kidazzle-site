<?php
/**
 * Template Name: Brigance Console V2
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brigance Console V2</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/react@18/umd/react.production.min.js"></script>
    <script src="https://unpkg.com/react-dom@18/umd/react-dom.production.min.js"></script>
    <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
    <!-- Standalone Lucide for browser -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <!-- Fix Tailwind Animations in standalone environment -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <style>
        body { margin: 0; background-color: #FDFBF7; font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif; }
        .scrollbar-hide::-webkit-scrollbar { display: none; }
        .scrollbar-hide { -ms-overflow-style: none; scrollbar-width: none; }
    </style>
</head>
<body>
    <div id="root"></div>
    <script type="text/babel">
        const { useState, useEffect, useRef } = React;

        // Custom Component resolving <IconName /> to <i data-lucide="icon-name"></i>
        const LucideIcon = ({ name, size = 24, className = '', strokeWidth = 2, color = 'currentColor' }) => {
            const ref = useRef(null);
            useEffect(() => {
                if (ref.current && window.lucide) {
                    window.lucide.createIcons({
                        root: ref.current.parentNode,
                        nameAttr: 'data-lucide'
                    });
                }
            }, [name, size, className, color, strokeWidth]);
            return <i ref={ref} data-lucide={name} className={className} style={{ width: size, height: size, strokeWidth: strokeWidth, stroke: color }}></i>;
        };

        const Baby = props => <LucideIcon name="baby" {...props} />;
        const Brain = props => <LucideIcon name="brain" {...props} />;
        const Palette = props => <LucideIcon name="palette" {...props} />;
        const MessageSquare = props => <LucideIcon name="message-square" {...props} />;
        const CheckCircle2 = props => <LucideIcon name="check-circle-2" {...props} />;
        const Star = props => <LucideIcon name="star" {...props} />;
        const Clock = props => <LucideIcon name="clock" {...props} />;
        const ChevronRight = props => <LucideIcon name="chevron-right" {...props} />;
        const Sparkles = props => <LucideIcon name="sparkles" {...props} />;
        const UserCircle = props => <LucideIcon name="user-circle" {...props} />;
        const BookOpen = props => <LucideIcon name="book-open" {...props} />;
        const Calendar = props => <LucideIcon name="calendar" {...props} />;
        const Send = props => <LucideIcon name="send" {...props} />;
        const Layout = props => <LucideIcon name="layout" {...props} />;
        const ExternalLink = props => <LucideIcon name="external-link" {...props} />;
        const X = props => <LucideIcon name="x" {...props} />;
        const Layers = props => <LucideIcon name="layers" {...props} />;
        const Smile = props => <LucideIcon name="smile" {...props} />;
        const Circle = props => <LucideIcon name="circle" {...props} />;
        const Trophy = props => <LucideIcon name="trophy" {...props} />;
        const Tent = props => <LucideIcon name="tent" {...props} />;
        const ClipboardList = props => <LucideIcon name="clipboard-list" {...props} />;
        const FileText = props => <LucideIcon name="file-text" {...props} />;
        const Search = props => <LucideIcon name="search" {...props} />;
        const Quote = props => <LucideIcon name="quote" {...props} />;

// -------------------------------------------------------------
// USER RAW COMPONENT
// -------------------------------------------------------------
const App = () => {
  const [selectedAge, setSelectedAge] = useState('4 Years');
  const [currentTime, setCurrentTime] = useState(new Date());
  const [showIframe, setShowIframe] = useState(false);
  const [showSample, setShowSample] = useState(false);
  const [checkedItems, setCheckedItems] = useState({});

  const logoUrl = "https://assets.cdn.filesafe.space/ZR2UvxPL2wlZNSvHjmJD/media/64ef561bad8c716760dfd435.png";

  const ages = [
    { label: 'Infant (0-11m)', id: 'Infant', status: 'Archive' },
    { label: 'Toddler (12-23m)', id: 'Toddler', status: 'Archive' },
    { label: '2 Years', id: '2 Years', status: 'Complete' },
    { label: '2.5 Years', id: '2.5 Years', status: 'Active' },
    { label: '3 Years', id: '3 Years', status: 'Complete' },
    { label: '4 Years', id: '4 Years', status: 'Active' },
    { label: 'Summer Camp', id: 'Summer Camp', status: 'Open' }
  ];

  // Data mapped directly from Brigance Screens III Technical Manual
  const briganceData = {
    '2.5 Years': {
      theme: 'Early Preschool Core Node',
      domains: [
        { name: 'Language Development', icon: <MessageSquare size={14} />, items: [
          { id: '25_1', label: 'Personal Data (First/Last/Age)', weight: 2 },
          { id: '25_2', label: 'Identifies Body Parts (Fingers/Teeth/Neck)', weight: 1.5 },
          { id: '25_3', label: 'Picture Vocabulary (Pencil/Cup/Sock)', weight: 2 },
          { id: '25_4', label: 'Plural s and -ing usage', weight: 5 }
        ]},
        { name: 'Academic / Cognitive', icon: <Brain size={14} />, items: [
          { id: '25_5', label: 'Knows Use of Objects (Pencil/Coat/Stove)', weight: 3 },
          { id: '25_6', label: 'Quantitative Concepts (One/More/Big/Little)', weight: 3 },
          { id: '25_7', label: 'Matches Colors (Red/Blue/Green/Yellow)', weight: 2 }
        ]},
        { name: 'Physical Development', icon: <Trophy size={14} />, items: [
          { id: '25_8', label: 'Walks Tiptoe (3 steps)', weight: 3 },
          { id: '25_9', label: 'Walks Heel-and-Toe', weight: 3 },
          { id: '25_10', label: 'Builds 8-block tower', weight: 2 }
        ]}
      ]
    },
    '4 Years': {
      theme: 'Kindergarten Readiness Node',
      domains: [
        { name: 'Language & Literacy', icon: <BookOpen size={14} />, items: [
          { id: '4_1', label: 'Personal Data (Incl. Middle Name/Age)', weight: 1 },
          { id: '4_2', label: 'Repeats Sentences (8 syllables)', weight: 3 },
          { id: '4_3', label: 'Prepositions & Irregular Plurals', weight: 5 },
          { id: '4_4', label: 'Picture Vocabulary (Boat/Ladder/Leaf)', weight: 2 }
        ]},
        { name: 'Academic / Cognitive', icon: <Brain size={14} />, items: [
          { id: '4_5', label: 'Number Concepts (Gives 2/3/5)', weight: 3 },
          { id: '4_6', label: 'Identifies Colors (5 correct)', weight: 2 },
          { id: '4_7', label: 'Visual Discrimination (Forms/Letters)', weight: 1 }
        ]},
        { name: 'Physical Development', icon: <Palette size={14} />, items: [
          { id: '4_8', label: 'Visual-Motor (Copies Shapes)', weight: 3 },
          { id: '4_9', label: 'Builds 10-block tower', weight: 2 },
          { id: '4_10', label: 'Hops 5 times on preferred foot', weight: 3 }
        ]}
      ],
      resources: ['4Y Assessment Manual', 'Parent Knowledge Sheet B']
    }
  };

  const currentAgeData = briganceData[selectedAge] || briganceData['4 Years'];

  useEffect(() => {
    const timer = setInterval(() => setCurrentTime(new Date()), 1000);
    return () => clearInterval(timer);
  }, []);

  const toggleItem = (id) => {
    setCheckedItems(prev => ({ ...prev, [id]: !prev[id] }));
  };

  const IframeModal = () => (
    <div className="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/70 backdrop-blur-md">
      <div className="bg-white w-full max-w-5xl h-[85vh] rounded-[48px] shadow-2xl overflow-hidden flex flex-col border border-[#EAE0D5] animate-in fade-in zoom-in duration-300">
        <div className="p-8 bg-[#FDFBF7] border-b border-[#EAE0D5] flex justify-between items-center">
          <div className="flex items-center gap-6">
            <img src={logoUrl} alt="KIDazzle" className="h-10 w-auto" />
            <div className="h-8 w-px bg-[#EAE0D5]" />
            <div>
              <h3 className="text-lg font-black text-[#023047] uppercase tracking-tighter">Digital Resource Stream</h3>
              <p className="text-[10px] text-[#D4A373] font-bold uppercase tracking-widest flex items-center gap-2">
                <Circle size={6} fill="#FB8500" className="text-[#FB8500] animate-pulse" /> Established secure node connection
              </p>
            </div>
          </div>
          <button onClick={() => setShowIframe(false)} className="p-3 hover:bg-white rounded-full transition-all text-[#023047] border border-transparent hover:border-[#EAE0D5]">
            <X size={24} />
          </button>
        </div>
        <div className="flex-1 bg-[#FAF9F6] flex items-center justify-center relative">
          <div className="text-center p-12 max-w-lg z-10">
            <div className="w-20 h-20 bg-white rounded-[28px] flex items-center justify-center mx-auto mb-8 shadow-xl border border-[#EAE0D5]">
               <Layers className="w-8 h-8 text-[#FB8500]" />
            </div>
            <h4 className="text-xl font-black text-[#023047] mb-3 uppercase tracking-tighter">Querying summer.kidazzle.com</h4>
            <p className="text-[#8B7E74] text-sm font-medium italic leading-relaxed">Fetching specific screening criteria for age cohort: {selectedAge}...</p>
          </div>
        </div>
      </div>
    </div>
  );

  return (
    <div className="min-h-screen bg-[#FDFBF7] text-[#5C524F] font-sans flex flex-col p-6 gap-6 selection:bg-[#EAE0D5]">
      
      {showIframe && <IframeModal />}

      {/* SAMPLE DATA SHEET MODAL */}
      {showSample && (
        <div className="fixed inset-0 z-[60] flex items-center justify-center p-8 bg-black/40 backdrop-blur-sm">
          <div className="bg-white w-full max-w-2xl rounded-[40px] shadow-2xl flex flex-col border border-[#EAE0D5] overflow-hidden animate-in slide-in-from-bottom-4 duration-300">
            <div className="p-6 bg-[#FDFBF7] flex justify-between items-center border-b border-[#EAE0D5]">
               <div className="flex items-center gap-3">
                  <ClipboardList className="text-[#D4A373]" />
                  <h3 className="font-black text-[#023047] uppercase tracking-tighter">Brigance Data Sheet Preview</h3>
               </div>
               <button onClick={() => setShowSample(false)} className="p-2 hover:bg-white rounded-full transition-all text-slate-400">
                  <X size={24} />
               </button>
            </div>
            <div className="p-10 space-y-6">
               <div className="border-2 border-dashed border-[#EAE0D5] p-8 rounded-[32px] bg-[#FAF9F6]">
                  <div className="flex justify-between border-b border-[#EAE0D5] pb-4 mb-6">
                     <span className="text-[10px] font-black text-slate-400 uppercase tracking-widest">Section C: Scoring Matrix</span>
                     <span className="text-[10px] font-black text-[#FB8500] uppercase">Official V3 Standard</span>
                  </div>
                  <div className="space-y-6">
                     <div className="flex justify-between items-center">
                        <span className="text-sm font-bold text-[#023047]">1B. Personal Data Response</span>
                        <span className="text-[10px] bg-white px-3 py-1 rounded-full border border-[#EAE0D5] font-mono text-[#D4A373]">1.0 PT EA</span>
                     </div>
                     <div className="pl-6 space-y-2">
                        <div className="flex items-center gap-3 text-xs text-[#8B7E74] font-medium"><div className="w-1.5 h-1.5 rounded-full bg-[#FB8500]" /> 1. Orally gives first name</div>
                        <div className="flex items-center gap-3 text-xs text-[#8B7E74] font-medium"><div className="w-1.5 h-1.5 rounded-full bg-[#FB8500]" /> 2. Orally gives last name</div>
                        <div className="flex items-center gap-3 text-xs text-[#023047] font-black"><div className="w-1.5 h-1.5 rounded-full border border-[#EAE0D5]" /> 3. Orally gives middle name</div>
                     </div>
                  </div>
               </div>
            </div>
          </div>
        </div>
      )}

      {/* HEADER */}
      <header className="flex items-center justify-between border-b border-[#EAE0D5] pb-6">
        <div className="flex items-center gap-6">
          <div className="bg-white p-2 rounded-2xl border border-[#EAE0D5] shadow-sm">
            <img src={logoUrl} alt="KIDazzle Logo" className="h-10 w-auto" />
          </div>
          <div>
            <h1 className="text-2xl font-black tracking-tighter text-[#023047] flex items-center gap-2">
              KIDAZZLE <span className="text-[#FB8500]">RESOURCES</span>
              <span className="text-[10px] px-3 py-1 bg-[#FDFBF7] text-[#D4A373] rounded-full border border-[#EAE0D5] ml-2 uppercase tracking-widest font-black shadow-sm">Digital Command</span>
            </h1>
            <p className="text-[10px] uppercase tracking-[0.4em] text-[#B4A7A0] font-black mt-1">
              Brigance Standard • Creative Curriculum Node
            </p>
          </div>
        </div>
        
        <div className="flex items-center gap-8">
          <div className="text-right">
            <div className="text-xl font-light tracking-tight text-[#023047] leading-none">
              {currentTime.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit', hour12: true })}
            </div>
            <div className="text-[10px] uppercase tracking-widest text-[#B4A7A0] font-black mt-2">
              Operational Status: Clear
            </div>
          </div>
        </div>
      </header>

      <div className="flex-1 grid grid-cols-12 gap-6 overflow-hidden">
        
        {/* LEFT: COHORT NAVIGATION */}
        <aside className="col-span-2 flex flex-col gap-4">
          <h3 className="text-[10px] uppercase tracking-[0.25em] font-black text-[#B4A7A0] px-1">Evaluation Nodes</h3>
          <div className="space-y-2 overflow-y-auto pr-1 scrollbar-hide">
            {ages.map((age, i) => (
              <button 
                key={i} 
                onClick={() => setSelectedAge(age.label)}
                className={`w-full group p-4 rounded-[28px] border transition-all text-left relative overflow-hidden ${
                  selectedAge === age.label 
                  ? 'bg-white border-[#D4A373]/40 shadow-md scale-[1.02]' 
                  : 'bg-[#FDFBF7]/40 border-transparent hover:bg-white hover:border-[#EAE0D5]'
                }`}
              >
                <div className={`absolute left-0 top-0 bottom-0 w-1.5 ${selectedAge === age.label ? 'bg-[#FB8500]' : 'bg-transparent'}`} />
                <div className={`text-xs font-black tracking-tight ${selectedAge === age.label ? 'text-[#023047]' : 'text-[#8B7E74]'}`}>{age.label}</div>
                <div className="flex items-center justify-between mt-2">
                  <span className={`text-[8px] uppercase font-black tracking-tighter ${
                    age.status.includes('Active') ? 'text-[#FB8500]' : 'text-slate-400'
                  }`}>
                    {age.status}
                  </span>
                  <ChevronRight size={12} className={selectedAge === age.label ? 'text-[#FB8500]' : 'text-[#EAE0D5]'} />
                </div>
              </button>
            ))}
          </div>

          <div className="mt-auto space-y-3">
            <button 
               onClick={() => setShowSample(true)}
               className="w-full p-4 bg-white border border-[#EAE0D5] text-[#D4A373] rounded-[30px] flex items-center justify-between group hover:bg-[#FDFBF7] transition-all shadow-sm"
            >
               <div className="text-left leading-tight">
                  <div className="text-[9px] font-black uppercase opacity-60">Visual Aid</div>
                  <div className="text-xs font-black">Scoring Sample</div>
               </div>
               <FileText size={18} />
            </button>
            
            <button 
               onClick={() => setShowIframe(true)}
               className="w-full p-6 bg-[#023047] text-white rounded-[32px] flex items-center justify-between group hover:bg-[#023047]/90 transition-all shadow-xl"
            >
               <div className="text-left">
                  <div className="text-[10px] font-black uppercase tracking-[0.2em] opacity-60">Anti-Gravity</div>
                  <div className="text-sm font-black tracking-tight">External Repo</div>
               </div>
               <ExternalLink size={20} className="text-[#FB8500]" />
            </button>
          </div>
        </aside>

        {/* MIDDLE: INTERACTIVE CHECKLIST */}
        <main className="col-span-7 flex flex-col gap-6 overflow-hidden">
          
          <div className="bg-white border border-[#EAE0D5] p-8 rounded-[48px] flex items-center justify-between shadow-sm relative overflow-hidden">
             <div className="absolute top-0 right-0 p-8 opacity-5 pointer-events-none">
                <Sparkles size={120} className="text-[#D4A373]" />
             </div>
             <div className="relative z-10 flex items-center gap-6">
                <div className="bg-[#FAF9F6] p-5 rounded-[24px] shadow-inner border border-[#EAE0D5]">
                  <Quote className="text-[#D4A373] w-6 h-6" />
                </div>
                <div>
                   <h2 className="text-[10px] font-black uppercase tracking-[0.4em] text-[#D4A373]">Current Curriculum Analysis</h2>
                   <p className="text-2xl font-black text-[#023047] tracking-tighter uppercase">{selectedAge} Integration</p>
                </div>
             </div>
             <div className="relative z-10 text-right">
                <span className="text-[9px] font-black text-slate-400 uppercase tracking-widest block mb-1">Standard Reference</span>
                <span className="text-xs font-bold text-[#FB8500] bg-orange-50 px-3 py-1 rounded-full border border-orange-100">Brigance Screens III</span>
             </div>
          </div>

          <div className="flex-1 grid grid-cols-2 gap-6 overflow-y-auto pr-2 pb-6 scrollbar-hide">
            
            {currentAgeData.domains.map((domain, i) => (
              <div key={i} className="bg-white border border-[#EAE0D5] rounded-[40px] p-8 shadow-sm flex flex-col border-b-[6px] border-b-[#EAE0D5]">
                <h3 className="text-[10px] font-black uppercase tracking-[0.25em] text-[#B4A7A0] mb-8 flex items-center gap-3">
                  <div className="p-2 bg-[#FDFBF7] rounded-lg border border-[#EAE0D5] text-[#FB8500]">{domain.icon || <Brain size={14}/>}</div> {domain.name}
                </h3>
                <div className="space-y-4 flex-1">
                  {domain.items.map((item) => (
                    <div 
                      key={item.id} 
                      onClick={() => toggleItem(item.id)}
                      className={`flex items-start gap-5 p-5 rounded-[28px] border transition-all cursor-pointer group ${
                        checkedItems[item.id] ? 'bg-[#FDFBF7] border-[#D4A373]/50 shadow-inner' : 'bg-white border-[#F4EFE9] hover:border-[#D4A373]/30'
                      }`}
                    >
                      <div className={`mt-0.5 w-7 h-7 rounded-2xl border-2 flex items-center justify-center transition-all ${
                        checkedItems[item.id] ? 'bg-[#023047] border-[#023047] text-white shadow-lg' : 'bg-white border-[#EAE0D5]'
                      }`}>
                        {checkedItems[item.id] && <CheckCircle2 size={16} strokeWidth={4} />}
                      </div>
                      <div className="flex-1">
                        <div className={`text-xs font-black leading-tight ${checkedItems[item.id] ? 'text-[#023047]' : 'text-[#8B7E74]'}`}>
                          {item.label}
                        </div>
                        <div className="flex justify-between items-center mt-2.5">
                          <span className="text-[9px] text-slate-400 font-bold uppercase tracking-tighter">Point Weight: {item.weight}</span>
                          {checkedItems[item.id] && <div className="text-[8px] bg-[#FB8500] text-white px-2 py-0.5 rounded-full font-black uppercase tracking-widest animate-in fade-in zoom-in">Mastered</div>}
                        </div>
                      </div>
                    </div>
                  ))}
                </div>
              </div>
            ))}
          </div>
        </main>

        {/* RIGHT: CHAT / ADVISOR */}
        <aside className="col-span-3 flex flex-col gap-6 overflow-hidden">
          
          <div className="bg-white border border-[#EAE0D5] rounded-[48px] p-8 flex-1 flex flex-col overflow-hidden shadow-sm border-l-4 border-l-[#D4A373]">
             <div className="flex justify-between items-center mb-10">
                <h3 className="text-[10px] font-black tracking-[0.4em] uppercase text-[#B4A7A0] flex items-center gap-3">
                  <MessageSquare size={16} className="text-[#FB8500]" /> Screening Advisor
                </h3>
                <div className="flex gap-1.5">
                   <div className="w-1.5 h-1.5 bg-[#D4A373] rounded-full animate-pulse" />
                   <div className="w-1.5 h-1.5 bg-[#D4A373] rounded-full animate-pulse delay-75 opacity-40" />
                </div>
             </div>
             
             <div className="flex-1 overflow-y-auto space-y-8 mb-4 pr-1 scrollbar-hide">
                <div className="space-y-3">
                   <div className="flex justify-between px-1">
                      <span className="text-[9px] font-black uppercase text-[#D4A373] tracking-widest">Active Status</span>
                   </div>
                   <div className="bg-[#FAF9F6] p-6 rounded-[32px] text-xs text-[#5C524F] leading-relaxed border border-[#EAE0D5] shadow-sm font-bold">
                      Current node evaluation: **{selectedAge}**. All curriculum assets are synced with the digital repository for the 2026 cycle.
                   </div>
                </div>

                <div className="space-y-3 items-end flex flex-col">
                   <div className="flex justify-between w-full px-1">
                      <span className="text-[9px] font-black uppercase text-slate-400 tracking-widest">Digital Lead</span>
                   </div>
                   <div className="bg-[#023047] p-6 rounded-[32px] rounded-tr-none text-sm text-[#FDFBF7]/90 leading-relaxed shadow-lg max-w-[95%] italic font-medium">
                      "Check the 2.5 Year node criteria for 'Plural s and -ing' usage—it is weighted at 5.0 points per the manual."
                   </div>
                </div>
             </div>

             <div className="relative mt-auto pt-8 border-t border-[#EAE0D5]">
                <textarea 
                  className="w-full bg-[#FAF9F6] border border-[#EAE0D5] rounded-[28px] p-6 text-sm text-[#023047] outline-none focus:border-[#D4A373] transition-all placeholder:text-[#B4A7A0] resize-none min-h-[160px] shadow-inner font-medium"
                  placeholder="Query advisor on node status..."
                />
                <button className="absolute bottom-6 right-6 p-5 bg-[#FB8500] text-white rounded-2xl hover:bg-[#023047] transition-all shadow-xl hover:scale-110 active:scale-95">
                   <Send size={20} strokeWidth={3} />
                </button>
             </div>
          </div>

          <div className="bg-white border border-[#EAE0D5] p-8 rounded-[40px] shadow-lg flex items-center gap-5">
             <div className="w-14 h-14 rounded-2xl bg-[#FAF9F6] border border-[#EAE0D5] flex items-center justify-center">
                <Search size={28} className="text-[#D4A373]" />
             </div>
             <div>
                <h4 className="text-[10px] font-black uppercase tracking-widest text-[#023047] mb-1">Status: Active Node Query</h4>
                <p className="text-[9px] font-bold text-[#8B7E74] uppercase tracking-tighter">Connected to summer.kidazzle.com</p>
             </div>
          </div>

        </aside>
      </div>
    </div>
  );
};

// Start rendering
const root = ReactDOM.createRoot(document.getElementById('root'));
root.render(<App />);
    </script>
</body>
</html>
