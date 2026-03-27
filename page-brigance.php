<?php
/**
 * Template Name: Brigance Console V3
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brigance Console V3</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/react@18/umd/react.production.min.js"></script>
    <script src="https://unpkg.com/react-dom@18/umd/react-dom.production.min.js"></script>
    <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
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

        const LucideIcon = ({ name, size = 24, className = '', strokeWidth = 2, color = 'currentColor' }) => {
            const ref = useRef(null);
            useEffect(() => {
                if (ref.current && window.lucide) {
                    ref.current.innerHTML = `<i data-lucide="${name}"></i>`;
                    window.lucide.createIcons({
                        root: ref.current,
                        nameAttr: 'data-lucide',
                        attrs: {
                           class: className,
                           width: size,
                           height: size,
                           'stroke-width': strokeWidth,
                           stroke: color
                        }
                    });
                }
            }, [name, size, className, color, strokeWidth]);
            return <span ref={ref} style={{ display: 'inline-flex', alignItems: 'center', justifyContent: 'center' }}></span>;
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
        const Info = props => <LucideIcon name="info" {...props} />;

        const App = () => {
          const [selectedAge, setSelectedAge] = useState('4 Years');
          const [currentTime, setCurrentTime] = useState(new Date());
          const [showIframe, setShowIframe] = useState(false);
          const [showSample, setShowSample] = useState(false);
          const [checkedItems, setCheckedItems] = useState({});
          const [activeItemDetail, setActiveItemDetail] = useState(null); // Modal state for detailed info

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

          const briganceData = {
            'Infant (0-11m)': {
              theme: 'Sensory Motor Core Node',
              domains: [
                { name: 'Language Development', icon: <MessageSquare size={14} />, items: [
                  { id: '0_1', label: 'Responds to voices & faces', weight: 3, detail: 'The infant recognizes primary caregivers and begins to smile and coo in response to vocal stimulus. Evaluates auditory processing.' },
                  { id: '0_2', label: 'Babbles and coos contextually', weight: 4, detail: 'Assesses early phonological sequencing. Repeating consonant-vowel blends (ba-ba-ba) establishes baseline pre-linguistic skills.' },
                  { id: '0_3', label: 'Uses basic gestures (waving/pointing)', weight: 3, detail: 'Crucial milestone indicating intentional communication. Pointing strongly correlates with vocabulary acquisition.' }
                ]},
                { name: 'Academic / Cognitive', icon: <Brain size={14} />, items: [
                  { id: '0_4', label: 'Tracks moving objects', weight: 2, detail: 'Visual tracking measures basic neurological coordination and optical health in the first 6 months.' },
                  { id: '0_5', label: 'Explores objects (mouthing/shaking)', weight: 3, detail: 'Tactile exploration is the core cognitive processor for infants investigating physical properties.' },
                  { id: '0_6', label: 'Shows object permanence awareness', weight: 5, detail: 'Piagetian milestone indicating the infant understands objects exist even when completely out of sight.' }
                ]},
                { name: 'Physical Development', icon: <Trophy size={14} />, items: [
                  { id: '0_7', label: 'Rolls over in both directions', weight: 3, detail: 'Assesses core strength and cross-midline coordination.' },
                  { id: '0_8', label: 'Sits without support', weight: 4, detail: 'Evaluates spinal musculature and vestibular balance system maturity.' },
                  { id: '0_9', label: 'Crawls or uses pincer grasp', weight: 3, detail: 'Pincer grasp demonstrates critical fine-motor neurological readiness for future writing activities.' }
                ]}
              ]
            },
            'Toddler (12-23m)': {
              theme: 'Exploration Core Node',
              domains: [
                { name: 'Language Development', icon: <MessageSquare size={14} />, items: [
                  { id: '1_1', label: 'Uses 10+ words functionally', weight: 4, detail: 'Evaluates express vocabulary scope beyond basic mama/dada.' },
                  { id: '1_2', label: 'Points to named body parts', weight: 3, detail: 'Measures receptive language comprehension linked to self-awareness.' },
                  { id: '1_3', label: 'Follows 1-step directions', weight: 3, detail: 'Assesses auditory processing and short-term memory integration ("Hand me the block").' }
                ]},
                { name: 'Academic / Cognitive', icon: <Brain size={14} />, items: [
                  { id: '1_4', label: 'Nests objects & simple puzzles', weight: 2, detail: 'Spatial reasoning and early geometry recognition.' },
                  { id: '1_5', label: 'Imitates pretend play', weight: 4, detail: 'Demonstrates symbolic thought processing (e.g. pretending to drink from empty cup).' },
                  { id: '1_6', label: 'Points to pictures in books', weight: 4, detail: 'Establishes early literacy foundation and 2D visual discrimination.' }
                ]},
                { name: 'Physical Development', icon: <Trophy size={14} />, items: [
                  { id: '1_7', label: 'Walks independently', weight: 5, detail: 'Gross motor milestone signaling graduation from infant neurology.' },
                  { id: '1_8', label: 'Eats with spoon/drinks from cup', weight: 2, detail: 'Evaluates hand-eye coordination and functional independence.' },
                  { id: '1_9', label: 'Stacks 3-4 blocks', weight: 3, detail: 'Fine motor assessment of release-control and spatial balancing.' }
                ]}
              ]
            },
            '2 Years': {
              theme: 'Pre-Foundational Node',
              domains: [
                { name: 'Language Development', icon: <MessageSquare size={14} />, items: [
                  { id: '2_1', label: 'Uses 2-3 word phrases', weight: 3, detail: 'The beginning of grammatical structure and syntax (Subject-Verb combinations).' },
                  { id: '2_2', label: 'Follows 2-step directions', weight: 4, detail: 'Advanced receptive evaluation testing multi-step cognitive holding.' },
                  { id: '2_3', label: 'Identifies common objects by name', weight: 3, detail: 'Tests noun retrieval speed and expressive articulation.' }
                ]},
                { name: 'Academic / Cognitive', icon: <Brain size={14} />, items: [
                  { id: '2_4', label: 'Sorts shapes & colors', weight: 3, detail: 'Early mathematical categorizing and visual processing skills.' },
                  { id: '2_5', label: 'Engages in rich pretend play', weight: 4, detail: 'Role-playing demonstrates abstract cognitive processing and empathy precursors.' },
                  { id: '2_6', label: 'Points to fine details in pictures', weight: 3, detail: 'Visual focal maturation required for later letter identification.' }
                ]},
                { name: 'Physical Development', icon: <Trophy size={14} />, items: [
                  { id: '2_7', label: 'Runs smoothly & climbs', weight: 4, detail: 'Advanced gross motor sequencing and gravitational comfort.' },
                  { id: '2_8', label: 'Kicks a ball forward', weight: 3, detail: 'Evaluates unilateral balance (standing on one leg to kick).' },
                  { id: '2_9', label: 'Turns book pages one at a time', weight: 3, detail: 'Requires highly refined pincer isolation and gentleness control.' }
                ]}
              ]
            },
            '2.5 Years': {
              theme: 'Early Preschool Core Node',
              domains: [
                { name: 'Language Development', icon: <MessageSquare size={14} />, items: [
                  { id: '25_1', label: 'Personal Data (First/Last/Age)', weight: 2, detail: 'Core baseline for personal identity and protective knowledge.' },
                  { id: '25_2', label: 'Identifies Body Parts (Fingers/Teeth/Neck)', weight: 1.5, detail: 'Advanced anatomical vocabulary requiring multi-syllable articulation.' },
                  { id: '25_3', label: 'Picture Vocabulary (Pencil/Cup/Sock)', weight: 2, detail: 'Evaluates visual-verbal translation speed across categories.' },
                  { id: '25_4', label: 'Plural s and -ing usage', weight: 5, detail: 'Key grammatical milestone testing morphological rule generation.' }
                ]},
                { name: 'Academic / Cognitive', icon: <Brain size={14} />, items: [
                  { id: '25_5', label: 'Knows Use of Objects (Pencil/Coat/Stove)', weight: 3, detail: 'Tests logical association and utility mapping.' },
                  { id: '25_6', label: 'Quantitative Concepts (One/More/Big/Little)', weight: 3, detail: 'Early mathematical baseline for volume and number.' },
                  { id: '25_7', label: 'Matches Colors (Red/Blue/Green/Yellow)', weight: 2, detail: 'Fundamental optic discrimination and categorization metric.' }
                ]},
                { name: 'Physical Development', icon: <Trophy size={14} />, items: [
                  { id: '25_8', label: 'Walks Tiptoe (3 steps)', weight: 3, detail: 'Demonstrates highly concentrated calf/ankle control and balance.' },
                  { id: '25_9', label: 'Walks Heel-and-Toe', weight: 3, detail: 'Tests advanced mid-line gravitational awareness.' },
                  { id: '25_10', label: 'Builds 8-block tower', weight: 2, detail: 'Evaluates spatial geometry, steadiness, and visual correction.' }
                ]}
              ]
            },
            '3 Years': {
              theme: 'Preschool Active Node',
              domains: [
                { name: 'Language Development', icon: <MessageSquare size={14} />, items: [
                  { id: '3_1', label: 'Understands prepositions (in/on/under)', weight: 3, detail: 'Crucial for spatial instruction comprehension in a classroom setting.' },
                  { id: '3_2', label: 'Uses pronouns (I, You, Me, We)', weight: 4, detail: 'Indicates separation of self from others and linguistic complexity.' },
                  { id: '3_3', label: 'Can say first and last name', weight: 3, detail: 'Protective developmental standard for early preschool independence.' }
                ]},
                { name: 'Academic / Cognitive', icon: <Brain size={14} />, items: [
                  { id: '3_4', label: 'Completes 3-4 piece puzzles', weight: 3, detail: 'Tests part-to-whole cognitive synthesis and spatial reasoning.' },
                  { id: '3_5', label: 'Understands concept of "two"', weight: 4, detail: 'Marks transition from rote-counting to actual arithmetic comprehension.' },
                  { id: '3_6', label: 'Turns mechanical knobs/switches', weight: 3, detail: 'Assesses mechanical causation logic and fine motor torque.' }
                ]},
                { name: 'Physical Development', icon: <Trophy size={14} />, items: [
                  { id: '3_7', label: 'Pedals a tricycle', weight: 4, detail: 'Bilateral coordination requiring asynchronous leg movements.' },
                  { id: '3_8', label: 'Walks up/down stairs alternate feet', weight: 4, detail: 'Evaluates advanced vestibular balance and quadricep strength.' },
                  { id: '3_9', label: 'Screws/unscrews jar lids', weight: 2, detail: 'Evaluates wrist pronation/supination necessary for advanced tool use.' }
                ]}
              ]
            },
            '4 Years': {
              theme: 'Kindergarten Readiness Node',
              domains: [
                { name: 'Language & Literacy', icon: <BookOpen size={14} />, items: [
                  { id: '4_1', label: 'Personal Data (Incl. Middle Name/Age)', weight: 1, detail: 'Advanced protective awareness and long-term memory retrieval.' },
                  { id: '4_2', label: 'Repeats Sentences (8 syllables)', weight: 3, detail: 'Tests auditory processing bandwidth and articulatory sequence memory.' },
                  { id: '4_3', label: 'Prepositions & Irregular Plurals', weight: 5, detail: 'Advanced syntax indicating robust grasp of grammatical exceptions (mice, geese).' },
                  { id: '4_4', label: 'Picture Vocabulary (Boat/Ladder/Leaf)', weight: 2, detail: 'Establishes complex expressive vocabulary range.' }
                ]},
                { name: 'Academic / Cognitive', icon: <Brain size={14} />, items: [
                  { id: '4_5', label: 'Number Concepts (Gives 2/3/5)', weight: 3, detail: 'Indicates secure 1-to-1 mathematical correspondence.' },
                  { id: '4_6', label: 'Identifies Colors (5 correct)', weight: 2, detail: 'Complete visual spectrum vocabulary mapping.' },
                  { id: '4_7', label: 'Visual Discrimination (Forms/Letters)', weight: 1, detail: 'The absolute prerequisite for typographic reading and phonetic alignment.' }
                ]},
                { name: 'Physical Development', icon: <Palette size={14} />, items: [
                  { id: '4_8', label: 'Visual-Motor (Copies Shapes)', weight: 3, detail: 'Translating 2D visual input into complex, controlled physical motor output (early writing).' },
                  { id: '4_9', label: 'Builds 10-block tower', weight: 2, detail: 'High-level spatial planning and micro-corrective physical stabilization.' },
                  { id: '4_10', label: 'Hops 5 times on preferred foot', weight: 3, detail: 'Supreme unilateral vestibular balance and dynamic athletic load bearing.' }
                ]}
              ]
            },
            'Summer Camp': {
              theme: 'Enrichment & Social Node',
              domains: [
                { name: 'Language & Social', icon: <MessageSquare size={14} />, items: [
                  { id: 'sc_1', label: 'Collaborative play & sharing', weight: 4, detail: 'Tests advanced socio-emotional intelligence, negotiation, and conflict resolution.' },
                  { id: 'sc_2', label: 'Follows complex group instructions', weight: 4, detail: 'Evaluates selective auditory focus amidst heavy group distraction.' },
                  { id: 'sc_3', label: 'Narrates detailed stories/events', weight: 2, detail: 'Demonstrates complex temporal sequencing and long-form narrative structure.' }
                ]},
                { name: 'Academic / Cognitive', icon: <Brain size={14} />, items: [
                  { id: 'sc_4', label: 'Engages in STEM/Science experiments', weight: 5, detail: 'Assesses hypothesis generation, observation skills, and scientific deduction.' },
                  { id: 'sc_5', label: 'Understands rules to organized games', weight: 3, detail: 'Tests abstract operational logic and adherence to systematic boundaries.' },
                  { id: 'sc_6', label: 'Demonstrates prolonged focus', weight: 2, detail: 'Evaluates executive function and attention span threshold on singular tasks.' }
                ]},
                { name: 'Physical Development', icon: <Trophy size={14} />, items: [
                  { id: 'sc_7', label: 'Advanced motor (skipping/jumping jacks)', weight: 3, detail: 'Asynchronous bilateral nervous system integration.' },
                  { id: 'sc_8', label: 'Independent self-care (dressing/bathroom)', weight: 4, detail: 'Evaluates overarching autonomy and bodily awareness routines.' },
                  { id: 'sc_9', label: 'Controlled fine-motor art techniques', weight: 3, detail: 'Demonstrates precision grip variations used in advanced writing and tool usage.' }
                ]}
              ]
            }
          };

          const currentAgeData = briganceData[selectedAge] || briganceData['4 Years'];
          const themeUrl = '<?php echo esc_js(get_template_directory_uri()); ?>';
          const sampleImages = {
              'Infant (0-11m)': themeUrl + '/assets/img/brigance/infant.png',
              'Toddler (12-23m)': themeUrl + '/assets/img/brigance/toddler.png',
              '2 Years': themeUrl + '/assets/img/brigance/2-years.png',
              '2.5 Years': themeUrl + '/assets/img/brigance/2-5-years.png',
              '3 Years': themeUrl + '/assets/img/brigance/2-5-years.png',
              '4 Years': themeUrl + '/assets/img/brigance/2-5-years.png'
          };

          useEffect(() => {
            const timer = setInterval(() => setCurrentTime(new Date()), 1000);
            return () => clearInterval(timer);
          }, []);

          const toggleItem = (id) => {
            setCheckedItems(prev => ({ ...prev, [id]: !prev[id] }));
          };

          // Render a detailed popup for an item
          const ItemDetailModal = ({ item, close }) => (
            <div className="fixed inset-0 z-[70] flex items-center justify-center p-4 bg-slate-900/70 backdrop-blur-sm animate-in fade-in duration-200">
              <div className="bg-white w-full max-w-lg rounded-[32px] overflow-hidden shadow-2xl flex flex-col border border-[#EAE0D5] transform scale-100">
                 <div className="p-6 bg-[#023047] flex justify-between items-center">
                    <h3 className="font-black text-white uppercase tracking-tighter flex items-center gap-3">
                       <Quote size={18} className="text-[#FB8500]" /> Research Advisory
                    </h3>
                    <button onClick={close} className="p-1 hover:bg-white/10 rounded-full transition-all text-white">
                       <X size={20} />
                    </button>
                 </div>
                 <div className="p-8 space-y-6 bg-[#FDFBF7]">
                    <div>
                       <span className="text-[10px] font-black uppercase tracking-widest text-[#D4A373] block mb-2">Curriculum Milestone</span>
                       <h4 className="text-xl font-black text-[#023047] leading-tight">{item.label}</h4>
                    </div>
                    <div className="bg-white border border-[#EAE0D5] p-6 rounded-2xl shadow-sm relative">
                       <div className="absolute -top-3 -right-3 bg-[#FB8500] text-white text-[10px] font-black uppercase px-3 py-1 rounded-full">
                          Weight: {item.weight}
                       </div>
                       <p className="text-sm font-medium text-[#5C524F] leading-relaxed italic">
                         "{item.detail}"
                       </p>
                    </div>
                    <div className="flex gap-4 pt-4 border-t border-[#EAE0D5]">
                       <button onClick={close} className="flex-1 py-3 bg-[#023047] text-white rounded-xl font-bold uppercase tracking-wide text-xs hover:bg-[#023047]/90 transition-all">Close Advisory</button>
                    </div>
                 </div>
              </div>
            </div>
          );

          return (
            <div className="min-h-screen bg-[#FDFBF7] text-[#5C524F] font-sans flex flex-col p-6 gap-6 selection:bg-[#EAE0D5]">
              
              {activeItemDetail && <ItemDetailModal item={activeItemDetail} close={() => setActiveItemDetail(null)} />}

              {showSample && (
                <div className="fixed inset-0 z-[60] flex items-center justify-center p-8 bg-black/40 backdrop-blur-sm">
                  <div className="bg-white w-full max-w-2xl rounded-[40px] shadow-2xl flex flex-col border border-[#EAE0D5] overflow-hidden animate-in slide-in-from-bottom-4 duration-300">
                    <div className="p-6 bg-[#FDFBF7] flex justify-between items-center border-b border-[#EAE0D5]">
                       <div className="flex items-center gap-3">
                          <ClipboardList className="text-[#D4A373]" />
                          <h3 className="font-black text-[#023047] uppercase tracking-tighter">Brigance Visual Baseline</h3>
                       </div>
                       <button onClick={() => setShowSample(false)} className="p-2 hover:bg-white rounded-full transition-all text-slate-400">
                          <X size={24} />
                       </button>
                    </div>
                    <div className="p-10 space-y-6">
                       <div className="border border-[#EAE0D5] rounded-[32px] bg-[#FAF9F6] p-2 flex justify-center shadow-inner">
                          <img src={sampleImages[selectedAge]} alt="Brigance Data Sample" className="max-h-[500px] object-contain rounded-[24px] opacity-95" />
                       </div>
                    </div>
                  </div>
                </div>
              )}

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
                      Educational Milestone Architecture
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

              <div className="flex-1 flex flex-col lg:grid lg:grid-cols-12 gap-8 lg:gap-6 lg:overflow-hidden overflow-y-auto">
                <aside className="lg:col-span-2 flex flex-col gap-4 shrink-0">
                  <h3 className="text-[10px] uppercase tracking-[0.25em] font-black text-[#B4A7A0] px-1 hidden lg:block">Curriculum Stages</h3>
                  <div className="flex lg:flex-col lg:space-y-2 gap-3 overflow-x-auto lg:overflow-y-auto pb-2 lg:pb-0 pr-1 scrollbar-hide snap-x">
                    {ages.map((age, i) => (
                      <div 
                        key={i} 
                        onClick={() => setSelectedAge(age.label)}
                        className={`w-[160px] shrink-0 snap-start lg:w-full group p-4 lg:rounded-[32px] rounded-[24px] border transition-all text-left relative overflow-hidden cursor-pointer flex flex-col gap-[2px] ${
                          selectedAge === age.label 
                          ? 'bg-white border-[#D4A373]/40 shadow-sm scale-[1.02] ring-2 ring-offset-1 ring-[#023047]' 
                          : 'bg-[#FDFBF7]/40 border-transparent hover:bg-white hover:border-[#EAE0D5]'
                        }`}
                      >
                        <div className={`absolute left-0 top-0 bottom-0 w-[6px] ${selectedAge === age.label ? 'bg-[#FB8500]' : 'bg-transparent'}`} />
                        <div className={`text-xs ml-1 font-black tracking-tight ${selectedAge === age.label ? 'text-[#023047]' : 'text-[#8B7E74]'}`}>{age.label}</div>
                        <div className="flex items-center ml-1 justify-between mb-1">
                          <span className={`text-[8px] uppercase font-black tracking-tighter ${
                            selectedAge === age.label ? 'text-[#D4A373]' : 'text-slate-400' 
                          }`}>
                            {age.status}
                          </span>
                          <ChevronRight size={12} className={selectedAge === age.label ? 'text-[#FB8500]' : 'text-[#EAE0D5] block lg:hidden'} />
                        </div>

                        {/* Inline Data Sheet Toggle Tab */}
                        {sampleImages[age.label] && (
                           <div 
                              onClick={(e) => {
                                 e.stopPropagation();
                                 setSelectedAge(age.label);
                                 setTimeout(() => setShowSample(true), 150);
                              }}
                              className={`mt-1 flex items-center justify-center gap-1.5 py-2.5 px-3 rounded-[20px] text-[9px] font-black uppercase tracking-wider transition-all duration-300
                              ${selectedAge === age.label 
                                 ? 'bg-[#023047] text-white shadow hover:bg-[#023047]/85 opacity-100 translate-y-0' 
                                 : 'bg-[#EAE0D5]/40 text-[#8B7E74] opacity-0 h-0 p-0 translate-y-[10px] scale-95 pointer-events-none group-hover:opacity-100 group-hover:h-auto group-hover:py-2.5 group-hover:scale-100 group-hover:pointer-events-auto group-hover:translate-y-0'
                              }`}
                           >
                              <FileText size={10} className={selectedAge === age.label ? "text-[#FB8500]" : "text-[#8B7E74]"} />
                              Data Sheet Sample
                           </div>
                        )}
                      </div>
                    ))}
                  </div>

                  <div className="mt-auto hidden lg:block"></div>
                </aside>

                <main className="lg:col-span-7 flex flex-col gap-6 lg:overflow-hidden">
                  <div className="bg-[#023047] border border-[#EAE0D5] p-6 lg:p-8 rounded-[32px] lg:rounded-[48px] flex items-center justify-between shadow-xl relative overflow-hidden">
                     <div className="absolute top-0 right-0 p-8 opacity-10 pointer-events-none hidden lg:block">
                        <Sparkles size={120} className="text-white" />
                     </div>
                     <div className="relative z-10 flex flex-col lg:flex-row items-start lg:items-center gap-4 lg:gap-6">
                        <div className="bg-white/10 p-4 lg:p-5 rounded-[20px] lg:rounded-[24px] shadow-inner border border-white/5 shrink-0">
                          <Quote className="text-[#FB8500] w-5 h-5 lg:w-6 lg:h-6" />
                        </div>
                        <div>
                           <h2 className="text-[9px] lg:text-[10px] font-black uppercase tracking-[0.4em] text-[#D4A373]">Active Cohort Diagnostics</h2>
                           <p className="text-xl lg:text-2xl font-black text-white tracking-tighter uppercase leading-tight">{selectedAge}</p>
                        </div>
                     </div>
                     <div className="relative z-10 text-right hidden md:block">
                        <span className="text-[9px] font-black text-white/50 uppercase tracking-widest block mb-1">Standard Alignment</span>
                        <span className="text-xs font-bold text-[#023047] bg-[#FB8500] px-3 py-1 rounded-full shadow-lg">Target Milestones</span>
                     </div>
                  </div>

                  <div className="flex-1 grid grid-cols-1 md:grid-cols-2 gap-6 overflow-y-visible lg:overflow-y-auto pr-0 lg:pr-2 pb-6 scrollbar-hide">
                    {currentAgeData.domains.map((domain, i) => (
                      <div key={i} className="bg-white border border-[#EAE0D5] rounded-[32px] lg:rounded-[40px] p-6 lg:p-8 shadow-sm flex flex-col border-b-[6px] border-b-[#EAE0D5]">
                        <h3 className="text-[9px] lg:text-[10px] font-black uppercase tracking-[0.25em] text-[#B4A7A0] mb-6 flex items-center gap-3">
                          <div className="p-2 bg-[#FDFBF7] rounded-lg border border-[#EAE0D5] text-[#FB8500]">{domain.icon || <Brain size={14}/>}</div> <span className="leading-tight">{domain.name}</span>
                        </h3>
                        <div className="space-y-4 flex-1">
                          {domain.items.map((item) => (
                            <div 
                              key={item.id} 
                              className={`flex items-start gap-4 p-4 rounded-[28px] border transition-all group ${
                                checkedItems[item.id] ? 'bg-[#FDFBF7] border-[#D4A373]/50 shadow-inner' : 'bg-white border-[#F4EFE9]'
                              }`}
                            >
                              <div 
                                onClick={() => toggleItem(item.id)}
                                className={`mt-0.5 w-7 h-7 shrink-0 rounded-2xl border-2 flex items-center justify-center transition-all cursor-pointer ${
                                checkedItems[item.id] ? 'bg-[#023047] border-[#023047] text-white shadow-lg scale-110' : 'bg-white border-[#EAE0D5] hover:border-[#D4A373]'
                              }`}>
                                {checkedItems[item.id] && <CheckCircle2 size={16} strokeWidth={4} />}
                              </div>
                              <div className="flex-1 mt-0.5">
                                <div className={`text-[11px] lg:text-xs font-black leading-tight ${checkedItems[item.id] ? 'text-[#023047]' : 'text-[#8B7E74]'}`}>
                                  {item.label}
                                </div>
                                <div className="flex justify-between items-center mt-3 border-t border-[#F4EFE9] pt-3">
                                  <span className="text-[9px] text-slate-400 font-bold uppercase tracking-tighter">Pt: {item.weight}</span>
                                  <button onClick={() => setActiveItemDetail(item)} className="text-[8px] bg-[#FAF9F6] text-[#D4A373] hover:bg-[#D4A373] hover:text-white border border-[#EAE0D5] px-2 py-1 rounded-full font-black uppercase tracking-widest transition-colors flex items-center gap-1 shadow-sm shrink-0">
                                      <Info size={10} /> Research
                                  </button>
                                </div>
                              </div>
                            </div>
                          ))}
                        </div>
                      </div>
                    ))}
                  </div>
                </main>

                <aside className="lg:col-span-3 flex flex-col gap-6 lg:overflow-hidden">
                  <div className="bg-white border border-[#EAE0D5] rounded-[48px] p-8 flex-1 flex flex-col overflow-hidden shadow-sm border-l-4 border-l-[#D4A373]">
                     <div className="flex justify-between items-center mb-8">
                        <h3 className="text-[10px] font-black tracking-[0.4em] uppercase text-[#B4A7A0] flex items-center gap-3">
                          <MessageSquare size={16} className="text-[#FB8500]" /> Intelligence Link
                        </h3>
                        <div className="flex gap-1.5">
                           <div className="w-1.5 h-1.5 bg-[#D4A373] rounded-full animate-pulse" />
                           <div className="w-1.5 h-1.5 bg-[#D4A373] rounded-full animate-pulse delay-75 opacity-40" />
                        </div>
                     </div>
                     
                     <div className="flex-1 overflow-y-auto space-y-6 mb-4 pr-1 scrollbar-hide">
                        <div className="space-y-3">
                           <div className="flex justify-between px-1">
                              <span className="text-[9px] font-black uppercase text-[#D4A373] tracking-widest">Ollama Secure</span>
                           </div>
                           <div className="bg-[#FAF9F6] p-5 rounded-[32px] text-[11px] text-[#5C524F] leading-relaxed border border-[#EAE0D5] shadow-sm font-bold">
                              Core parameters updated for **{selectedAge}**. Awaiting DeepSeek curriculum validation for local execution. All records are securely routed to OpenClaw.
                           </div>
                        </div>

                        <div className="space-y-3 items-end flex flex-col">
                           <div className="flex justify-between w-full px-1">
                              <span className="text-[9px] font-black uppercase text-slate-400 tracking-widest">Active Insight</span>
                           </div>
                           <div className="bg-[#023047] p-5 rounded-[32px] rounded-tr-none text-xs text-[#FDFBF7]/90 leading-relaxed shadow-lg max-w-[95%] italic font-medium border border-[#023047]">
                              "For {selectedAge}, prioritize assessing the physical readiness and language syntax. Use the research popups to guide your specific grading."
                           </div>
                        </div>
                     </div>

                     <div className="relative mt-auto pt-6 border-t border-[#EAE0D5]">
                        <textarea 
                          className="w-full bg-[#FAF9F6] border border-[#EAE0D5] rounded-[24px] p-5 text-sm text-[#023047] outline-none focus:border-[#D4A373] transition-all placeholder:text-[#B4A7A0] resize-none min-h-[120px] shadow-inner font-medium"
                          placeholder="Query specialized educational agent..."
                        />
                        <button className="absolute bottom-5 right-5 p-4 bg-[#FB8500] text-white rounded-2xl hover:bg-[#023047] transition-all shadow-xl hover:scale-110 active:scale-95">
                           <Send size={18} strokeWidth={3} />
                        </button>
                     </div>
                  </div>

                  <div className="bg-white border border-[#EAE0D5] p-6 rounded-[32px] shadow-lg flex items-center gap-5">
                     <div className="w-12 h-12 rounded-2xl bg-[#023047] flex items-center justify-center shadow-inner">
                        <Search size={24} className="text-[#FB8500]" />
                     </div>
                     <div>
                        <h4 className="text-[10px] font-black uppercase tracking-widest text-[#023047] mb-1">Status: OpenClaw Ready</h4>
                        <p className="text-[9px] font-bold text-[#8B7E74] uppercase tracking-tighter">Ollama / DeepSeek Initialized</p>
                     </div>
                  </div>

                </aside>
              </div>
            </div>
          );
        };

        const root = ReactDOM.createRoot(document.getElementById('root'));
        root.render(<App />);
    </script>
</body>
</html>