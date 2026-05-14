<?php
/**
 * Template Name: Brigance Console V3
 */

if (file_exists(get_template_directory() . '/page-digital-resources.php')) {
    require get_template_directory() . '/page-digital-resources.php';
    return;
}
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
        const Info = props => <LucideIcon name="info" {...props} />;

        const App = () => {
          const [selectedAge, setSelectedAge] = useState('4 Years');
          const [currentTime, setCurrentTime] = useState(new Date());
          const [showIframe, setShowIframe] = useState(false);
          const [showSample, setShowSample] = useState(false);
          const [checkedItems, setCheckedItems] = useState({});
          const [activeItemDetail, setActiveItemDetail] = useState(null); // Modal state for detailed info
          const [chatInput, setChatInput] = useState('');
          const [chatMessages, setChatMessages] = useState([
            {
              role: 'assistant',
              text: 'Hi. I can help you understand curriculum, developmental milestones, screenings, classroom routines, and what to ask when choosing childcare. I only answer from parent-facing education resources.'
            }
          ]);

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

          const ageResourceMap = {
            'Infant (0-11m)': [
              { title: 'Infant curriculum focus', desc: 'Bonding, sensory exploration, tummy time, language exposure, and safe routines.', links: ['Tummy time questions', 'Feeding and nap routines', 'What teachers observe'] },
              { title: 'Developmental snapshot', desc: 'Parents can look for eye contact, tracking, cooing, rolling, sitting, and early gestures.', links: ['Motor milestones', 'Early communication', 'Caregiver attachment'] }
            ],
            'Toddler (12-23m)': [
              { title: 'Toddler curriculum focus', desc: 'Language growth, movement, imitation, parallel play, self-help routines, and exploration.', links: ['Table toys', 'Early words', 'Safe climbing and movement'] },
              { title: 'Developmental snapshot', desc: 'Toddlers show growth through walking, pointing, naming familiar people, simple directions, and pretend play.', links: ['Receptive language', 'Pretend play', 'Fine-motor play'] }
            ],
            '2 Years': [
              { title: 'Two-year-old curriculum focus', desc: 'Two-year-olds learn through routines, sorting, art exploration, dramatic play, music, movement, and guided language.', links: ['Parallel play', 'Sorting and colors', 'Art as early thinking'] },
              { title: 'Developmental snapshot', desc: 'Look for 2-3 word phrases, following two-step directions, early independence, running, climbing, and pretend play.', links: ['Language phrases', 'Behavior guidance', 'Toilet learning readiness'] }
            ],
            '2.5 Years': [
              { title: 'Two-and-a-half curriculum focus', desc: 'Identity, body vocabulary, object use, color matching, block play, and stronger classroom routines.', links: ['Personal data', 'Object function', 'Block towers'] },
              { title: 'Developmental snapshot', desc: 'Children begin combining language, movement, and problem solving in more intentional ways.', links: ['Following routines', 'Fine-motor control', 'Social-emotional coaching'] }
            ],
            '3 Years': [
              { title: 'Three-year-old curriculum focus', desc: 'Dramatic play, art, block building, stories, classroom jobs, early math, and social problem solving.', links: ['Dramatic play area', 'Why art matters', 'Classroom routines'] },
              { title: 'Developmental snapshot', desc: 'Parents can watch for pronouns, prepositions, first and last name, puzzles, tricycles, and cooperative play.', links: ['Language growth', 'Gross motor confidence', 'Play-based problem solving'] }
            ],
            '4 Years': [
              { title: 'Four-year-old curriculum focus', desc: 'Kindergarten readiness through literacy, number concepts, writing readiness, science, cooperation, and independence.', links: ['Pre-K questions', 'Early writing', 'Number concepts'] },
              { title: 'Developmental snapshot', desc: 'Look for stronger sentence memory, color knowledge, shape copying, hopping, counting, and classroom confidence.', links: ['Visual discrimination', 'Writing readiness', 'Executive function'] }
            ],
            'Summer Camp': [
              { title: 'Summer enrichment focus', desc: 'Project work, STEM experiments, social confidence, outdoor play, creative arts, and longer attention spans.', links: ['STEM play', 'Group games', 'Creative projects'] },
              { title: 'Developmental snapshot', desc: 'Camp gives children room to practice teamwork, rules, self-care, and confidence in a less formal rhythm.', links: ['Collaboration', 'Outdoor confidence', 'Storytelling'] }
            ]
          };

          const externalResources = [
            {
              name: 'NAEYC',
              url: 'https://www.naeyc.org/',
              desc: 'National Association for the Education of Young Children. Useful for understanding high-quality early childhood practice and accreditation language.'
            },
            {
              name: 'Georgia DECAL',
              url: 'https://www.decal.ga.gov/',
              desc: 'Georgia Department of Early Care and Learning. Parent-facing source for state childcare rules, licensing, and family resources.'
            },
            {
              name: 'GELDS',
              url: 'https://gelds.decal.ga.gov/',
              desc: 'Georgia Early Learning and Development Standards. Helps parents see what children are practicing by age and development area.'
            },
            {
              name: 'Teaching Strategies',
              url: 'https://teachingstrategies.com/',
              desc: 'Home of Creative Curriculum and early childhood assessment resources used by many education programs.'
            },
            {
              name: 'ERS / ITERS',
              url: 'https://www.ersi.info/scales',
              desc: 'Environment Rating Scales. Helps explain how classroom arrangement, materials, routines, and interactions support learning.'
            }
          ];

          const chatKnowledge = [
            { keys: ['two', '2 year', '2-year', 'two-year'], answer: 'For two-year-olds, the rabbit hole should start with language, parallel play, table toys, dramatic play, art, sensory exploration, and routines. The deeper question is not just what they play with, but what skill the material is helping them practice.' },
            { keys: ['curriculum', 'creative'], answer: 'KIDazzle uses a play-based curriculum direction connected to Creative Curriculum ideas: teachers plan intentional experiences, then use play, routines, books, art, movement, and classroom materials to support development.' },
            { keys: ['brigance', 'screening', 'developmental'], answer: 'Developmental screening is a way to notice where a child is growing and where adults may need to watch more closely. It is not a diagnosis. Parents should use it to ask better questions about language, motor skills, social development, and classroom support.' },
            { keys: ['naeyc', 'accreditation'], answer: 'NAEYC is a national early childhood organization. Parents can use it to understand what high-quality early childhood practice looks like: relationships, curriculum, teaching, assessment, health, staff, families, and leadership.' },
            { keys: ['gelds', 'georgia'], answer: 'GELDS are Georgia early learning standards. They help parents connect everyday classroom activities to development areas like language, cognitive growth, physical development, social-emotional skills, and approaches to play and learning.' },
            { keys: ['dramatic', 'pretend'], answer: 'Dramatic play is not just dress-up. Children practice language, memory, social roles, self-control, planning, negotiation, and early literacy when they act out real-life situations.' },
            { keys: ['table toys', 'toys'], answer: 'Table toys help children practice structured play: sorting, matching, taking turns, fine-motor control, focus, early math, and problem solving. For toddlers, the toy choice matters because the material teaches the hand, the eye, and the brain to work together.' }
          ];

          const selectedResources = ageResourceMap[selectedAge] || ageResourceMap['4 Years'];

          useEffect(() => {
            const timer = setInterval(() => setCurrentTime(new Date()), 1000);
            return () => clearInterval(timer);
          }, []);

          const toggleItem = (id) => {
            setCheckedItems(prev => ({ ...prev, [id]: !prev[id] }));
          };

          const sendParentChat = () => {
            const prompt = chatInput.trim();
            if (!prompt) return;
            const lower = prompt.toLowerCase();
            const match = chatKnowledge.find(entry => entry.keys.some(key => lower.includes(key)));
            const fallback = `Good question. For ${selectedAge}, I would start by asking what skill the child is practicing, how the teacher supports it, and how you can reinforce it at home. This helper is bounded to parent education, so it will not access private child records or internal operations.`;
            setChatMessages(prev => [
              ...prev,
              { role: 'user', text: prompt },
              { role: 'assistant', text: match ? match.answer : fallback }
            ]);
            setChatInput('');
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
                          {/* Placeholder image instead of raw data sheet text */}
                          <img src="https://i.imgur.com/vHq8E2P.png" alt="Brigance Data Sample" className="max-h-[500px] object-contain rounded-[24px] opacity-90 mix-blend-multiply" />
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

              <div className="flex-1 flex flex-col lg:grid lg:grid-cols-12 gap-6 lg:overflow-hidden overflow-y-auto pb-10">
                <aside className="lg:col-span-2 flex lg:flex-col gap-4 overflow-x-auto lg:overflow-x-visible pb-2 scrollbar-hide whitespace-nowrap lg:whitespace-normal">
                  <h3 className="text-[10px] uppercase tracking-[0.25em] font-black text-[#B4A7A0] px-1 hidden lg:block">Curriculum Nodes</h3>
                  <div className="flex lg:space-y-2 lg:block space-x-2 lg:space-x-0 overflow-y-auto lg:pr-1 scrollbar-hide">
                    {ages.map((age, i) => (
                      <button 
                        key={i} 
                        onClick={() => setSelectedAge(age.label)}
                    className={`w-full group p-4 rounded-[28px] border transition-all text-left relative overflow-hidden opacity-70 hover:opacity-100 ${
                          selectedAge === age.label 
                          ? 'bg-white border-[#D4A373]/40 shadow-md scale-[1.02] ring-2 ring-offset-1 ring-[#023047] opacity-100' 
                          : 'bg-[#FDFBF7]/40 border-transparent hover:bg-white hover:border-[#EAE0D5]'
                        }`}
                      >
                        <div className={`absolute left-0 top-0 bottom-0 w-1.5 ${selectedAge === age.label ? 'bg-[#FB8500]' : 'bg-transparent'}`} />
                        <div className={`text-xs font-black tracking-tight ${selectedAge === age.label ? 'text-[#023047]' : 'text-[#8B7E74]'}`}>{age.label}</div>
                        <div className="flex items-center justify-between mt-2">
                          <span className={`text-[8px] uppercase font-black tracking-tighter ${
                            selectedAge === age.label ? 'text-[#D4A373]' : 'text-slate-400' 
                          }`}>
                            {age.status}
                          </span>
                          <ChevronRight size={12} className={selectedAge === age.label ? 'text-[#FB8500]' : 'text-[#EAE0D5]'} />
                        </div>
                      </button>
                    ))}
                  </div>

                  <div className="hidden lg:block mt-auto space-y-3">
                    <button 
                       onClick={() => setShowSample(true)}
                       className="w-full p-4 bg-[#023047] text-white border border-[#EAE0D5] rounded-[30px] flex items-center justify-between group hover:bg-[#023047]/90 transition-all shadow-xl"
                    >
                       <div className="text-left leading-tight">
                          <div className="text-[9px] font-black uppercase opacity-60">Visual Aid</div>
                          <div className="text-xs font-black">Data Sheet Sample</div>
                       </div>
                       <FileText size={18} className="text-[#FB8500]" />
                    </button>
                  </div>
                </aside>

                <main className="lg:col-span-7 flex flex-col gap-6 lg:overflow-hidden">
                  <div className="grid grid-cols-2 lg:hidden gap-4 mb-2">
                     <button onClick={() => document.getElementById('chat-mobile-target').scrollIntoView({behavior: 'smooth'})} className="bg-[#FB8500] text-white p-4 rounded-[24px] font-black text-xs uppercase flex items-center justify-center gap-2 shadow-lg active:scale-95 transition-all w-full">
                        <MessageSquare size={16} /> Start Chat
                     </button>
                     <button onClick={() => setShowSample(true)} className="bg-[#023047] text-white p-4 rounded-[24px] font-black text-xs uppercase flex items-center justify-center gap-2 shadow-lg active:scale-95 transition-all w-full">
                        <FileText size={16} /> Data Sheet
                     </button>
                  </div>
                  <div className="bg-[#023047] border border-[#EAE0D5] p-6 lg:p-8 rounded-[48px] flex items-center justify-between shadow-xl relative overflow-hidden">
                     <div className="absolute top-0 right-0 p-8 opacity-10 pointer-events-none">
                        <Sparkles size={120} className="text-white" />
                     </div>
                     <div className="relative z-10 flex items-center gap-6">
                        <div className="bg-white/10 p-5 rounded-[24px] shadow-inner border border-white/5">
                          <Quote className="text-[#FB8500] w-6 h-6" />
                        </div>
                        <div>
                           <h2 className="text-[10px] font-black uppercase tracking-[0.4em] text-[#D4A373]">Active Cohort Diagnostics</h2>
                           <p className="text-2xl font-black text-white tracking-tighter uppercase">{selectedAge}</p>
                        </div>
                     </div>
                     <div className="relative z-10 text-right">
                        <span className="text-[9px] font-black text-white/50 uppercase tracking-widest block mb-1">Standard Alignment</span>
                        <span className="text-xs font-bold text-[#023047] bg-[#FB8500] px-3 py-1 rounded-full shadow-lg">Target Milestones</span>
                     </div>
                  </div>

                  <section className="bg-white border border-[#EAE0D5] rounded-[40px] p-6 lg:p-8 shadow-sm">
                    <div className="flex flex-col md:flex-row md:items-end md:justify-between gap-4 mb-6">
                      <div>
                        <p className="text-[10px] font-black uppercase tracking-[0.3em] text-[#D4A373]">Parent Rabbit Hole</p>
                        <h2 className="text-2xl font-black text-[#023047] tracking-tight">What to learn next for {selectedAge}</h2>
                      </div>
                      <span className="text-[10px] font-black uppercase text-[#8B7E74] bg-[#FDFBF7] border border-[#EAE0D5] rounded-full px-3 py-2">Public education only</span>
                    </div>
                    <div className="grid md:grid-cols-2 gap-4">
                      {selectedResources.map((resource, index) => (
                        <article key={index} className="rounded-[28px] border border-[#EAE0D5] bg-[#FAF9F6] p-5">
                          <h3 className="font-black text-[#023047] mb-2">{resource.title}</h3>
                          <p className="text-sm text-[#5C524F] leading-relaxed mb-4">{resource.desc}</p>
                          <div className="flex flex-wrap gap-2">
                            {resource.links.map((link, i) => (
                              <button key={i} onClick={() => setChatInput(`Tell me about ${link} for ${selectedAge}`)} className="text-[10px] font-black uppercase tracking-wide rounded-full border border-[#D4A373]/40 bg-white px-3 py-2 text-[#023047] hover:bg-[#023047] hover:text-white transition-colors">
                                {link}
                              </button>
                            ))}
                          </div>
                        </article>
                      ))}
                    </div>
                  </section>

                  <div className="flex-1 grid grid-cols-1 md:grid-cols-2 gap-6 lg:overflow-y-auto lg:pr-2 lg:pb-6 scrollbar-hide">
                    {currentAgeData.domains.map((domain, i) => (
                      <div key={i} className="bg-white border border-[#EAE0D5] rounded-[40px] p-6 lg:p-8 shadow-sm flex flex-col border-b-[6px] border-b-[#EAE0D5]">
                        <h3 className="text-[10px] font-black uppercase tracking-[0.25em] text-[#B4A7A0] mb-6 flex items-center gap-3">
                          <div className="p-2 bg-[#FDFBF7] rounded-lg border border-[#EAE0D5] text-[#FB8500]">{domain.icon || <Brain size={14}/>}</div> {domain.name}
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
                                className={`mt-0.5 w-7 h-7 rounded-2xl border-2 flex items-center justify-center transition-all cursor-pointer ${
                                checkedItems[item.id] ? 'bg-[#023047] border-[#023047] text-white shadow-lg scale-110' : 'bg-white border-[#EAE0D5] hover:border-[#D4A373]'
                              }`}>
                                {checkedItems[item.id] && <CheckCircle2 size={16} strokeWidth={4} />}
                              </div>
                              <div className="flex-1 mt-1">
                                <div className={`text-xs font-black leading-tight ${checkedItems[item.id] ? 'text-[#023047]' : 'text-[#8B7E74]'}`}>
                                  {item.label}
                                </div>
                                <div className="flex justify-between items-center mt-3">
                                  <span className="text-[9px] text-slate-400 font-bold uppercase tracking-tighter">Pt: {item.weight}</span>
                                  <button onClick={() => setActiveItemDetail(item)} className="text-[9px] bg-[#FAF9F6] text-[#D4A373] hover:bg-[#D4A373] hover:text-white border border-[#EAE0D5] px-2 py-1 rounded-full font-black uppercase tracking-widest transition-colors flex items-center gap-1 shadow-sm">
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

                <aside className="lg:col-span-3 flex flex-col gap-6 lg:overflow-hidden" id="chat-mobile-target">
                  <div className="bg-white border border-[#EAE0D5] rounded-[48px] p-6 lg:p-8 flex flex-col shadow-sm border-l-4 border-l-[#D4A373] min-h-[520px] lg:max-h-[620px]">
                     <div className="flex justify-between items-center mb-6">
                        <h3 className="text-[10px] font-black tracking-[0.4em] uppercase text-[#B4A7A0] flex items-center gap-3">
                          <MessageSquare size={16} className="text-[#FB8500]" /> Parent Resource Chat
                        </h3>
                        <div className="flex gap-1.5">
                           <div className="w-1.5 h-1.5 bg-[#D4A373] rounded-full animate-pulse" />
                           <div className="w-1.5 h-1.5 bg-[#D4A373] rounded-full animate-pulse delay-75 opacity-40" />
                        </div>
                     </div>
                     
                     <div className="flex-1 overflow-y-auto space-y-4 mb-4 pr-1 max-h-[300px]">
                        {chatMessages.map((message, index) => (
                          <div key={index} className={`flex ${message.role === 'user' ? 'justify-end' : 'justify-start'}`}>
                            <div className={`max-w-[92%] p-4 rounded-[24px] text-xs leading-relaxed shadow-sm ${
                              message.role === 'user'
                                ? 'bg-[#023047] text-white rounded-tr-none'
                                : 'bg-[#FAF9F6] text-[#5C524F] border border-[#EAE0D5] rounded-tl-none'
                            }`}>
                              {message.text}
                            </div>
                          </div>
                        ))}
                     </div>

                     <div className="relative mt-auto pt-6 border-t border-[#EAE0D5]">
                        <textarea 
                          value={chatInput}
                          onChange={(e) => setChatInput(e.target.value)}
                          onKeyDown={(e) => {
                            if (e.key === 'Enter' && !e.shiftKey) {
                              e.preventDefault();
                              sendParentChat();
                            }
                          }}
                          className="w-full bg-[#FAF9F6] border border-[#EAE0D5] rounded-[24px] p-5 text-sm text-[#023047] outline-none focus:border-[#D4A373] transition-all placeholder:text-[#B4A7A0] resize-none min-h-[100px] shadow-inner font-medium"
                          placeholder="Ask about curriculum, milestones, screenings, dramatic play, table toys..."
                        />
                        <button onClick={sendParentChat} className="absolute bottom-5 right-5 p-3 lg:p-4 bg-[#FB8500] text-white rounded-2xl hover:bg-[#023047] transition-all shadow-xl hover:scale-110 active:scale-95" aria-label="Send parent resource question">
                           <Send size={18} strokeWidth={3} />
                        </button>
                     </div>
                  </div>

                  <div className="bg-white border border-[#EAE0D5] p-5 lg:p-6 rounded-[32px] shadow-lg hidden lg:block">
                     <div className="flex items-center gap-4 mb-4">
                       <div className="w-12 h-12 rounded-2xl bg-[#023047] flex items-center justify-center shadow-inner shrink-0">
                          <ExternalLink size={22} className="text-[#FB8500]" />
                       </div>
                       <div>
                          <h4 className="text-[10px] font-black uppercase tracking-widest text-[#023047] mb-1">Outside Resource Map</h4>
                          <p className="text-[9px] font-bold text-[#8B7E74] uppercase tracking-tighter">Parent links with context</p>
                       </div>
                     </div>
                     <div className="space-y-3">
                       {externalResources.map((resource, index) => (
                         <a key={index} href={resource.url} target="_blank" rel="noopener noreferrer" className="block rounded-2xl border border-[#EAE0D5] bg-[#FAF9F6] p-4 hover:border-[#D4A373] transition-colors">
                           <span className="flex items-center justify-between text-xs font-black text-[#023047]">
                             {resource.name}
                             <ExternalLink size={12} className="text-[#FB8500]" />
                           </span>
                           <span className="block text-[10px] leading-relaxed text-[#5C524F] mt-2">{resource.desc}</span>
                         </a>
                       ))}
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
