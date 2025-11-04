<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Badges - ReadAgora</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;700;800&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet"/>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#f04299",
                        "primary-gradient": "linear-gradient(to right, #f04299, #f87dc3)",
                        "background-light": "#f8f6f7",
                        "background-dark": "#221019",
                    },
                    fontFamily: {
                        "display": ["Plus Jakarta Sans", "Noto Sans", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.5rem",
                        "lg": "1rem",
                        "xl": "1.5rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .badge-category {
            display: none;
            animation: fadeIn 0.5s ease-in-out;
        }
        input[type="radio"].category-toggle:checked + label {
            border-bottom-width: 3px;
            border-color: #f04299;
            color: #f04299;
            font-weight: 700;
        }
        input[type="radio"].category-toggle:checked + label p {
            background: linear-gradient(to right, #f04299, #f87dc3);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        #reading:checked ~ .badges-container #reading-badges,
        #writing:checked ~ .badges-container #writing-badges,
        #community:checked ~ .badges-container #community-badges {
            display: grid;
        }
        input[type="radio"].filter-toggle:checked + label {
            background-image: linear-gradient(to right, #f04299, #f87dc3);
            color: white;
            box-shadow: 0 4px 15px -5px #f04299;
        }
        #earned:checked ~ .badges-container .badge-card.unearned {
            display: none;
        }
        #unearned:checked ~ .badges-container .badge-card.earned {
            display: none;
        }
        .modal-overlay {
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease, visibility 0.3s ease;
        }
        #badge-modal-toggle:target {
            opacity: 1;
            visibility: visible;
        }
        #badge-modal-toggle:target .modal-content {
            transform: translateY(0);
        }
        .modal-content {
            transform: translateY(20px);
            transition: transform 0.3s ease;
        }
        .loading {
            opacity: 0.6;
            pointer-events: none;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark font-display">
    <div class="relative flex h-auto min-h-screen w-full flex-col group/design-root overflow-x-hidden">
        <div class="layout-container flex h-full grow flex-col">
            <div class="flex flex-1 justify-center">
                <div class="layout-content-container flex flex-col w-full">
                    <header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-primary/20 dark:border-primary/30 px-6 py-3 bg-background-light dark:bg-background-dark sticky top-0 z-10">
                        <button class="flex items-center justify-center rounded-xl h-10 w-10 text-slate-800 dark:text-slate-200" onclick="history.back()">
                            <span class="material-symbols-outlined">arrow_back</span>
                        </button>
                        <div class="flex items-center gap-4 text-slate-800 dark:text-slate-200">
                            <h2 class="text-xl font-bold leading-tight tracking-[-0.015em]">Badges</h2>
                        </div>
                        <div class="w-10"></div>
                    </header>
                    
                    <div class="p-6 flex flex-col gap-6">
                        <div class="relative">
                            <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-primary">search</span>
                            <input id="searchInput" class="w-full rounded-xl border border-primary/20 bg-white dark:bg-slate-900 py-3 pl-12 pr-4 text-slate-800 dark:text-slate-200 placeholder-slate-400 focus:border-primary focus:ring-primary/50 dark:focus:border-primary/70" placeholder="Search badges..." type="text"/>
                        </div>
                        
                        <div class="flex flex-col gap-3 p-4 bg-white dark:bg-slate-900 rounded-xl">
                            <div class="flex gap-6 justify-between">
                                <p id="progressText" class="text-slate-800 dark:text-slate-200 text-base font-medium leading-normal">Loading...</p>
                            </div>
                            <div class="rounded bg-primary/20">
                                <div id="progressBar" class="h-2 rounded bg-primary" style="width: 0%;"></div>
                            </div>
                        </div>
                        
                        <div class="flex p-1 bg-white dark:bg-slate-900 rounded-xl justify-between">
                            <input checked class="hidden filter-toggle" id="all" name="badge-filter" type="radio" onchange="filterBadges()"/>
                            <label class="flex-1 text-center py-2 px-4 rounded-lg cursor-pointer text-slate-500 dark:text-slate-400 font-semibold text-sm transition-all duration-300" for="all">All Badges</label>
                            <input class="hidden filter-toggle" id="earned" name="badge-filter" type="radio" onchange="filterBadges()"/>
                            <label class="flex-1 text-center py-2 px-4 rounded-lg cursor-pointer text-slate-500 dark:text-slate-400 font-semibold text-sm transition-all duration-300" for="earned">Earned</label>
                            <input class="hidden filter-toggle" id="unearned" name="badge-filter" type="radio" onchange="filterBadges()"/>
                            <label class="flex-1 text-center py-2 px-4 rounded-lg cursor-pointer text-slate-500 dark:text-slate-400 font-semibold text-sm transition-all duration-300" for="unearned">Unearned</label>
                        </div>
                        
                        <div class="pb-3">
                            <div class="flex border-b border-primary/20 dark:border-primary/30 justify-between">
                                <input checked class="hidden category-toggle" id="reading" name="badge-category" type="radio" onchange="switchCategory('reading')"/>
                                <label class="flex flex-col items-center justify-center border-b-[3px] border-b-transparent text-slate-500 dark:text-slate-400 pb-[13px] pt-4 flex-1 cursor-pointer transition-all duration-300" for="reading">
                                    <p class="text-base font-medium leading-normal tracking-[0.015em]">Reading</p>
                                </label>
                                <input class="hidden category-toggle" id="writing" name="badge-category" type="radio" onchange="switchCategory('writing')"/>
                                <label class="flex flex-col items-center justify-center border-b-[3px] border-b-transparent text-slate-500 dark:text-slate-400 pb-[13px] pt-4 flex-1 cursor-pointer transition-all duration-300" for="writing">
                                    <p class="text-base font-medium leading-normal tracking-[0.015em]">Writing</p>
                                </label>
                                <input class="hidden category-toggle" id="community" name="badge-category" type="radio" onchange="switchCategory('community')"/>
                                <label class="flex flex-col items-center justify-center border-b-[3px] border-b-transparent text-slate-500 dark:text-slate-400 pb-[13px] pt-4 flex-1 cursor-pointer transition-all duration-300" for="community">
                                    <p class="text-base font-medium leading-normal tracking-[0.015em]">Community</p>
                                </label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="badges-container px-6 pb-6">
                        <div class="badge-category grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 gap-6" id="reading-badges">
                            <!-- Dynamic content will be loaded here -->
                        </div>
                        <div class="badge-category grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 gap-6" id="writing-badges">
                            <!-- Dynamic content will be loaded here -->
                        </div>
                        <div class="badge-category grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 gap-6" id="community-badges">
                            <!-- Dynamic content will be loaded here -->
                        </div>
                    </div>
                </div>
            </div>
            <?php include 'bottom_nav.php'; ?>
        </div>
    </div>
    
    <!-- Badge Modal -->
    <div class="modal-overlay fixed inset-0 z-50 flex items-end justify-center bg-black/60 p-4 sm:items-center" id="badge-modal-toggle">
        <a class="absolute inset-0" href="#"></a>
        <div class="modal-content relative flex flex-col items-center w-full max-w-md bg-background-light dark:bg-background-dark rounded-xl shadow-lg p-8 text-center mx-auto">
            <a class="absolute top-4 right-4 text-slate-500 dark:text-slate-400 hover:text-primary dark:hover:text-primary transition-colors" href="#">
                <span class="material-symbols-outlined">close</span>
            </a>
            <div id="modalBadgeImage" class="w-36 h-36 bg-center bg-no-repeat aspect-square bg-cover rounded-full mb-6"></div>
            <h3 id="modalBadgeTitle" class="text-2xl font-bold text-slate-800 dark:text-slate-100 mb-2"></h3>
            <p id="modalBadgeDescription" class="text-slate-600 dark:text-slate-300 mb-4"></p>
            <div class="w-full bg-primary/10 dark:bg-primary/20 rounded-lg p-4 mb-6">
                <p class="text-sm text-slate-500 dark:text-slate-400 mb-1">Achievement</p>
                <p id="modalBadgeRequirement" class="text-base font-semibold text-slate-800 dark:text-slate-200"></p>
            </div>
            <div id="modalBadgePoints" class="flex items-center justify-center gap-2 bg-green-100 dark:bg-green-900/50 text-green-600 dark:text-green-400 rounded-full px-4 py-2">
                <span class="material-symbols-outlined !text-xl">stars</span>
                <p class="font-bold text-lg"><span id="pointsValue">0</span> Points</p>
            </div>
        </div>
    </div>

    <script>
        let allBadges = [];
        let currentCategory = 'reading';
        let currentFilter = 'all';

        // Load badges when page loads
        document.addEventListener('DOMContentLoaded', function() {
            loadBadges();
            
            // Add search functionality
            document.getElementById('searchInput').addEventListener('input', function(e) {
                filterBadgesBySearch(e.target.value);
            });
        });

        async function loadBadges() {
            try {
                document.body.classList.add('loading');
                const response = await fetch('api/get_badges.php');
                const data = await response.json();
                
                if (data.success) {
                    allBadges = data.badges;
                    updateProgress(data.progress);
                    renderBadges();
                } else {
                    console.error('Failed to load badges:', data.message);
                }
            } catch (error) {
                console.error('Error loading badges:', error);
            } finally {
                document.body.classList.remove('loading');
            }
        }

        function updateProgress(progress) {
            const progressText = document.getElementById('progressText');
            const progressBar = document.getElementById('progressBar');
            
            progressText.textContent = `${progress.percentage}% of all badges collected`;
            progressBar.style.width = `${progress.percentage}%`;
        }

        function renderBadges() {
            const categories = ['reading', 'writing', 'community'];
            
            categories.forEach(category => {
                const container = document.getElementById(`${category}-badges`);
                const categoryBadges = allBadges.filter(badge => badge.category === category);
                
                container.innerHTML = categoryBadges.map(badge => createBadgeHTML(badge)).join('');
            });
            
            // Attach click events to badges
            attachBadgeClickEvents();
        }

        function createBadgeHTML(badge) {
            const isEarned = badge.progress.current >= badge.progress.required;
            const progressPercent = Math.min((badge.progress.current / badge.progress.required) * 100, 100);
            
            return `
                <div class="badge-card ${isEarned ? 'earned' : 'unearned'} flex flex-col gap-4 text-center items-center bg-white dark:bg-slate-900 rounded-xl p-6 transition-all duration-300 cursor-pointer ${!isEarned ? 'opacity-50' : ''}" 
                     data-badge-id="${badge.id}" onclick="openBadgeModal(${badge.id})">
                    <div class="relative">
                        <div class="w-28 h-28 bg-center bg-no-repeat aspect-square bg-cover rounded-full" style="background-image: url('${badge.image}')"></div>
                        ${isEarned ? `
                            <div class="absolute -bottom-1 -right-1 bg-green-500 rounded-full p-1.5 border-2 border-white dark:border-slate-900">
                                <span class="material-symbols-outlined text-white !text-lg">check</span>
                            </div>
                        ` : ''}
                    </div>
                    <div class="flex flex-col gap-1">
                        <p class="text-slate-800 dark:text-slate-200 text-lg font-bold leading-normal">${badge.name}</p>
                        <p class="text-slate-500 dark:text-slate-400 text-sm font-normal leading-normal">${badge.requirement}</p>
                    </div>
                    ${isEarned ? `
                        <p class="text-sm font-bold text-green-500">Collected</p>
                    ` : badge.progress.current > 0 ? `
                        <div class="w-full">
                            <div class="rounded bg-primary/20">
                                <div class="h-1.5 rounded bg-primary" style="width: ${progressPercent}%;"></div>
                            </div>
                            <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">${badge.progress.current}/${badge.progress.required}</p>
                        </div>
                    ` : `
                        <p class="text-sm font-bold text-slate-500 dark:text-slate-400">Locked</p>
                    `}
                </div>
            `;
        }

        function attachBadgeClickEvents() {
            document.querySelectorAll('.badge-card').forEach(card => {
                card.addEventListener('click', function() {
                    const badgeId = this.getAttribute('data-badge-id');
                    openBadgeModal(badgeId);
                });
            });
        }

        function openBadgeModal(badgeId) {
            const badge = allBadges.find(b => b.id == badgeId);
            if (!badge) return;

            document.getElementById('modalBadgeImage').style.backgroundImage = `url('${badge.image}')`;
            document.getElementById('modalBadgeTitle').textContent = badge.name;
            document.getElementById('modalBadgeDescription').textContent = badge.description;
            document.getElementById('modalBadgeRequirement').textContent = badge.requirement;
            document.getElementById('pointsValue').textContent = badge.points;

            // Show modal
            window.location.hash = 'badge-modal-toggle';
        }

        function switchCategory(category) {
            currentCategory = category;
            filterBadges();
        }

        function filterBadges() {
            currentFilter = document.querySelector('input[name="badge-filter"]:checked').id;
            filterBadgesBySearch(document.getElementById('searchInput').value);
        }

        function filterBadgesBySearch(searchTerm) {
            const categories = ['reading', 'writing', 'community'];
            
            categories.forEach(category => {
                const container = document.getElementById(`${category}-badges`);
                const badges = container.querySelectorAll('.badge-card');
                
                badges.forEach(badge => {
                    const badgeName = badge.querySelector('p.text-lg').textContent.toLowerCase();
                    const badgeDesc = badge.querySelector('p.text-sm').textContent.toLowerCase();
                    const searchLower = searchTerm.toLowerCase();
                    
                    const matchesSearch = !searchTerm || badgeName.includes(searchLower) || badgeDesc.includes(searchLower);
                    const matchesFilter = currentFilter === 'all' || 
                                         (currentFilter === 'earned' && badge.classList.contains('earned')) ||
                                         (currentFilter === 'unearned' && badge.classList.contains('unearned'));
                    
                    badge.style.display = (matchesSearch && matchesFilter) ? 'flex' : 'none';
                });
            });
        }
    </script>
</body>
</html>