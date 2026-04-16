<!DOCTYPE html>
<html lang="fr" class="h-full bg-slate-50">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FishFresh AI - Dashboard Intelligent</title>
    <!-- Chargement des bibliothèques nécessaires -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .glass-card {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(241, 245, 249, 1);
        }
        .chart-container { position: relative; height: 220px; width: 100%; }
        /* Custom scrollbar pour un look moderne */
        ::-webkit-scrollbar { width: 5px; }
        ::-webkit-scrollbar-track { background: #f8fafc; }
        ::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 10px; }
    </style>
</head>
<body class="h-full antialiased text-slate-900">
    <div class="flex h-full">
        <!-- Barre Latérale (Sidebar) -->
        <aside class="w-72 bg-white border-r border-slate-200 hidden lg:flex flex-col shrink-0">
            <div class="p-8">
                <div class="flex items-center gap-3 text-blue-600 font-extrabold text-2xl tracking-tight">
                    <div class="bg-blue-600 p-2 rounded-xl text-white shadow-lg shadow-blue-200">
                        <i data-lucide="waves" class="w-6 h-6"></i>
                    </div>
                    <span>FishFresh</span>
                </div>
                <p class="text-[10px] text-slate-400 ml-14 -mt-1 uppercase tracking-[0.2em] font-bold">Port d'Agadir</p>
            </div>
            
            <nav class="flex-1 px-6 space-y-2 mt-4">
                <a href="#" class="flex items-center gap-3 px-4 py-3.5 text-sm font-bold bg-blue-600 text-white rounded-2xl shadow-xl shadow-blue-100 transition-all">
                    <i data-lucide="layout-dashboard" class="w-5 h-5"></i> Dashboard
                </a>
                <a href="#" class="flex items-center gap-3 px-4 py-3.5 text-sm font-semibold text-slate-500 hover:bg-slate-50 hover:text-blue-600 rounded-2xl transition-all">
                    <i data-lucide="database" class="w-5 h-5"></i> Base de données
                </a>
                <a href="#" class="flex items-center gap-3 px-4 py-3.5 text-sm font-semibold text-slate-500 hover:bg-slate-50 hover:text-blue-600 rounded-2xl transition-all">
                    <i data-lucide="thermometer" class="w-5 h-5"></i> Capteurs IoT
                </a>
                <a href="#" class="flex items-center gap-3 px-4 py-3.5 text-sm font-semibold text-slate-500 hover:bg-slate-50 hover:text-blue-600 rounded-2xl transition-all">
                    <i data-lucide="file-text" class="w-5 h-5"></i> Certificats
                </a>
                <a href="#" class="flex items-center gap-3 px-4 py-3.5 text-sm font-semibold text-slate-500 hover:bg-slate-50 hover:text-blue-600 rounded-2xl transition-all">
                    <i data-lucide="map-pin" class="w-5 h-5"></i> Zones de pêche
                </a>
            </nav>

            <div class="p-6 mt-auto">
                <div class="bg-gradient-to-br from-slate-900 to-slate-800 rounded-3xl p-5 text-white shadow-2xl">
                    <div class="flex items-center gap-2 mb-3">
                        <div class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></div>
                        <span class="text-[10px] font-bold uppercase tracking-widest text-slate-300">Statut Système</span>
                    </div>
                    <p class="text-xs font-medium text-slate-400 mb-4 leading-relaxed italic">"Surveillance active de la chaîne du froid en cours..."</p>
                    <button class="w-full py-2.5 bg-white/10 hover:bg-white/20 rounded-xl text-[10px] font-bold uppercase tracking-wider transition-colors border border-white/10">
                        Vérifier serveurs
                    </button>
                </div>
            </div>
        </aside>

        <!-- Contenu Principal -->
        <main class="flex-1 flex flex-col overflow-hidden">
            <!-- Barre Supérieure -->
            <header class="bg-white/80 backdrop-blur-md border-b border-slate-100 h-20 flex items-center justify-between px-10 shrink-0 z-10">
                <div>
                    <h1 class="text-xl font-extrabold text-slate-900 tracking-tight">Tableau de Bord de Qualité</h1>
                    <div class="flex items-center gap-2 text-slate-400 text-[11px] font-semibold uppercase tracking-wider">
                        <span>Terminal de Contrôle</span>
                        <span class="w-1 h-1 bg-slate-300 rounded-full"></span>
                        <span>Données en direct</span>
                    </div>
                </div>
                <div class="flex items-center gap-8">
                    <div class="hidden md:flex items-center bg-slate-100 rounded-2xl px-4 py-2 gap-3 border border-slate-200">
                        <i data-lucide="search" class="w-4 h-4 text-slate-400"></i>
                        <input type="text" placeholder="Rechercher un lot..." class="bg-transparent border-none text-xs font-medium focus:ring-0 w-48 text-slate-600">
                    </div>
                    <button class="relative p-2.5 text-slate-400 hover:text-blue-600 hover:bg-blue-50 rounded-xl transition-all">
                        <i data-lucide="bell" class="w-5 h-5"></i>
                        <span class="absolute top-2 right-2 w-2.5 h-2.5 bg-red-500 border-2 border-white rounded-full"></span>
                    </button>
                    <div class="flex items-center gap-4 pl-6 border-l border-slate-200">
                        <div class="text-right hidden sm:block">
                            <p class="text-xs font-extrabold text-slate-900">Admin User</p>
                            <p class="text-[10px] text-slate-400 font-medium tracking-tight">admin@agadir-port.ma</p>
                        </div>
                        <div class="w-12 h-12 bg-gradient-to-tr from-blue-600 to-indigo-600 rounded-2xl flex items-center justify-center text-white font-bold shadow-lg shadow-blue-200 ring-4 ring-blue-50">
                            A
                        </div>
                    </div>
                </div>
            </header>

            <!-- Zone de défilement du contenu -->
            <div class="flex-1 overflow-y-auto p-10 space-y-8">
                
                <!-- Cartes de Statistiques -->
                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-8">
                    <!-- Score de Fraîcheur -->
                    <div class="bg-white p-6 rounded-[2.5rem] border border-slate-100 shadow-sm hover:shadow-xl hover:shadow-blue-500/5 transition-all group">
                        <div class="flex justify-between items-start mb-4">
                            <div class="w-14 h-14 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center group-hover:bg-blue-600 group-hover:text-white transition-all">
                                <i data-lucide="sparkles" class="w-7 h-7"></i>
                            </div>
                            <span class="text-[11px] font-bold text-emerald-500 bg-emerald-50 px-3 py-1 rounded-full">+12%</span>
                        </div>
                        <p class="text-xs text-slate-400 font-bold uppercase tracking-widest mb-1">Score Fraîcheur</p>
                        <h3 class="text-3xl font-black text-slate-900 leading-none">87.4%</h3>
                    </div>
                    <!-- Poissons Analysés -->
                    <div class="bg-white p-6 rounded-[2.5rem] border border-slate-100 shadow-sm hover:shadow-xl hover:shadow-indigo-500/5 transition-all group">
                        <div class="flex justify-between items-start mb-4">
                            <div class="w-14 h-14 bg-indigo-50 text-indigo-600 rounded-2xl flex items-center justify-center group-hover:bg-indigo-600 group-hover:text-white transition-all">
                                <i data-lucide="package" class="w-7 h-7"></i>
                            </div>
                            <span class="text-[11px] font-bold text-emerald-500 bg-emerald-50 px-3 py-1 rounded-full">+45</span>
                        </div>
                        <p class="text-xs text-slate-400 font-bold uppercase tracking-widest mb-1">Analyses/Jour</p>
                        <h3 class="text-3xl font-black text-slate-900 leading-none">1,247</h3>
                    </div>
                    <!-- Température Moyenne -->
                    <div class="bg-white p-6 rounded-[2.5rem] border border-slate-100 shadow-sm hover:shadow-xl hover:shadow-orange-500/5 transition-all group">
                        <div class="flex justify-between items-start mb-4">
                            <div class="w-14 h-14 bg-orange-50 text-orange-500 rounded-2xl flex items-center justify-center group-hover:bg-orange-600 group-hover:text-white transition-all">
                                <i data-lucide="thermometer-snowflake" class="w-7 h-7"></i>
                            </div>
                            <span class="text-[11px] font-bold text-emerald-500 bg-emerald-50 px-3 py-1 rounded-full">Stable</span>
                        </div>
                        <p class="text-xs text-slate-400 font-bold uppercase tracking-widest mb-1">Temp. Moyenne</p>
                        <h3 class="text-3xl font-black text-slate-900 leading-none">4.2°C</h3>
                    </div>
                    <!-- Capteurs Actifs -->
                    <div class="bg-white p-6 rounded-[2.5rem] border border-slate-100 shadow-sm hover:shadow-xl hover:shadow-cyan-500/5 transition-all group">
                        <div class="flex justify-between items-start mb-4">
                            <div class="w-14 h-14 bg-cyan-50 text-cyan-600 rounded-2xl flex items-center justify-center group-hover:bg-cyan-600 group-hover:text-white transition-all">
                                <i data-lucide="radio" class="w-7 h-7"></i>
                            </div>
                            <div class="flex gap-1">
                                <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                                <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                            </div>
                        </div>
                        <p class="text-xs text-slate-400 font-bold uppercase tracking-widest mb-1">Capteurs IoT</p>
                        <h3 class="text-3xl font-black text-slate-900 leading-none">24 / 24</h3>
                    </div>
                </div>

                <!-- Grille Principale (Layout) -->
                <div class="grid grid-cols-1 xl:grid-cols-3 gap-8">
                    
                    <!-- Colonne de Gauche: Graphiques et Table -->
                    <div class="xl:col-span-2 space-y-8">
                        <!-- Graphique Fraîcheur Temps Réel -->
                        <div class="bg-white p-8 rounded-[2.5rem] border border-slate-100 shadow-sm">
                            <div class="flex justify-between items-center mb-8">
                                <div>
                                    <h4 class="text-lg font-extrabold text-slate-900 tracking-tight">Fraîcheur au Fil du Temps</h4>
                                    <p class="text-xs text-slate-400 font-medium">Analyse continue des dernières 24 heures</p>
                                </div>
                                <div class="flex items-center gap-4 bg-slate-50 px-4 py-2 rounded-xl border border-slate-100">
                                    <div class="flex items-center gap-2">
                                        <div class="w-3 h-3 bg-blue-600 rounded-full shadow-sm shadow-blue-200"></div>
                                        <span class="text-[10px] font-bold text-slate-600">Lot A-42 (Actuel)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="chart-container">
                                <canvas id="mainChart"></canvas>
                            </div>
                        </div>

                        <!-- Tableau des Détails des Poissons -->
                        <div class="bg-white p-8 rounded-[2.5rem] border border-slate-100 shadow-sm overflow-hidden">
                            <div class="flex justify-between items-center mb-8">
                                <div>
                                    <h4 class="text-lg font-extrabold text-slate-900 tracking-tight">Détails des Lots Récents</h4>
                                    <p class="text-xs text-slate-400 font-medium">Résultats d'analyse et traçabilité</p>
                                </div>
                                <button class="p-2 text-slate-400 hover:text-blue-600 hover:bg-blue-50 rounded-xl transition-all">
                                    <i data-lucide="more-horizontal" class="w-6 h-6"></i>
                                </button>
                            </div>
                            <div class="overflow-x-auto">
                                <table class="w-full text-left">
                                    <thead>
                                        <tr class="text-[11px] text-slate-400 uppercase tracking-[0.15em] font-bold border-b border-slate-50">
                                            <th class="pb-4 font-black">Identifiant Lot</th>
                                            <th class="pb-4 font-black">Heure Collecte</th>
                                            <th class="pb-4 font-black text-center">Température</th>
                                            <th class="pb-4 font-black text-center">Score IA</th>
                                            <th class="pb-4 font-black text-right">État</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-sm font-medium">
                                        <tr class="border-b border-slate-50/50 hover:bg-slate-50 transition-all group">
                                            <td class="py-5 font-bold text-slate-900">LOT-AGD-240</td>
                                            <td class="py-5 text-slate-500">09:12 AM</td>
                                            <td class="py-5 text-center">
                                                <span class="bg-blue-50 text-blue-700 px-3 py-1 rounded-lg font-bold">4.2°C</span>
                                            </td>
                                            <td class="py-5 text-center text-emerald-600 font-extrabold text-base">94%</td>
                                            <td class="py-5 text-right">
                                                <span class="inline-flex items-center gap-1.5 px-3 py-1 bg-emerald-50 text-emerald-600 rounded-full font-bold text-[10px] uppercase tracking-wider ring-1 ring-emerald-100">
                                                    <span class="w-1.5 h-1.5 bg-emerald-500 rounded-full"></span> Frais
                                                </span>
                                            </td>
                                        </tr>
                                        <tr class="border-b border-slate-50/50 hover:bg-slate-50 transition-all group">
                                            <td class="py-5 font-bold text-slate-900">LOT-AGD-239</td>
                                            <td class="py-5 text-slate-500">08:45 AM</td>
                                            <td class="py-5 text-center">
                                                <span class="bg-orange-50 text-orange-600 px-3 py-1 rounded-lg font-bold">6.1°C</span>
                                            </td>
                                            <td class="py-5 text-center text-orange-500 font-extrabold text-base">72%</td>
                                            <td class="py-5 text-right">
                                                <span class="inline-flex items-center gap-1.5 px-3 py-1 bg-orange-50 text-orange-600 rounded-full font-bold text-[10px] uppercase tracking-wider ring-1 ring-orange-100">
                                                    <span class="w-1.5 h-1.5 bg-orange-500 rounded-full"></span> Moyen
                                                </span>
                                            </td>
                                        </tr>
                                        <tr class="border-b border-slate-50/50 hover:bg-slate-50 transition-all group">
                                            <td class="py-5 font-bold text-slate-900">LOT-AGD-238</td>
                                            <td class="py-5 text-slate-500">07:30 AM</td>
                                            <td class="py-5 text-center">
                                                <span class="bg-blue-50 text-blue-700 px-3 py-1 rounded-lg font-bold">3.9°C</span>
                                            </td>
                                            <td class="py-5 text-center text-emerald-600 font-extrabold text-base">91%</td>
                                            <td class="py-5 text-right">
                                                <span class="inline-flex items-center gap-1.5 px-3 py-1 bg-emerald-50 text-emerald-600 rounded-full font-bold text-[10px] uppercase tracking-wider ring-1 ring-emerald-100">
                                                    <span class="w-1.5 h-1.5 bg-emerald-500 rounded-full"></span> Frais
                                                </span>
                                            </td>
                                        </tr>
                                        <tr class="hover:bg-slate-50 transition-all group">
                                            <td class="py-5 font-bold text-slate-900">LOT-AGD-237</td>
                                            <td class="py-5 text-slate-500">06:15 AM</td>
                                            <td class="py-5 text-center">
                                                <span class="bg-red-50 text-red-600 px-3 py-1 rounded-lg font-bold">8.4°C</span>
                                            </td>
                                            <td class="py-5 text-center text-red-500 font-extrabold text-base">45%</td>
                                            <td class="py-5 text-right">
                                                <span class="inline-flex items-center gap-1.5 px-3 py-1 bg-red-50 text-red-600 rounded-full font-bold text-[10px] uppercase tracking-wider ring-1 ring-red-100">
                                                    <span class="w-1.5 h-1.5 bg-red-500 rounded-full"></span> Dégradé
                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Colonne de Droite: IA, Capteurs et Lieux -->
                    <div class="space-y-8">
                        <!-- Prédiction IA -->
                        <div class="bg-gradient-to-br from-indigo-600 to-blue-700 p-8 rounded-[2.5rem] text-white shadow-2xl shadow-blue-500/20 relative overflow-hidden group">
                            <div class="absolute -right-4 -top-4 opacity-10 group-hover:scale-110 transition-transform duration-700">
                                <i data-lucide="brain-circuit" class="w-32 h-32"></i>
                            </div>
                            <div class="flex items-center gap-2 mb-8 bg-white/20 w-fit px-4 py-1.5 rounded-full border border-white/20 backdrop-blur-md">
                                <i data-lucide="cpu" class="w-3 h-3"></i>
                                <span class="text-[10px] font-bold uppercase tracking-widest">Vision IA Active</span>
                            </div>
                            <div class="flex justify-between items-end mb-8 relative z-10">
                                <div>
                                    <p class="text-[10px] text-blue-100 font-bold mb-2 uppercase tracking-widest opacity-80">État Prédit</p>
                                    <span class="px-4 py-1.5 bg-white text-blue-700 text-xs font-black rounded-xl shadow-lg">FRAIS</span>
                                </div>
                                <div class="text-right">
                                    <p class="text-[10px] text-blue-100 font-bold mb-2 uppercase tracking-widest opacity-80">Confiance</p>
                                    <p class="text-4xl font-black tracking-tight">~ 94%</p>
                                </div>
                            </div>
                            <p class="text-xs text-blue-50 leading-relaxed bg-white/10 p-5 rounded-2xl italic border border-white/10 relative z-10 backdrop-blur-sm">
                                "L'analyse combinée des données sensorielles et visuelles confirme une conservation optimale. Durée estimée avant dégradation : 8-10h."
                            </p>
                        </div>

                        <!-- Données Capteurs (Grille) -->
                        <div class="bg-white p-8 rounded-[2.5rem] border border-slate-100 shadow-sm">
                            <div class="flex justify-between items-center mb-6">
                                <h4 class="text-sm font-extrabold text-slate-800 uppercase tracking-tight">Données Capteurs</h4>
                                <div class="flex items-center gap-1.5">
                                    <div class="w-2 h-2 bg-green-500 rounded-full animate-ping"></div>
                                    <span class="text-[9px] font-bold text-slate-400 uppercase tracking-tighter">Live</span>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-5">
                                <div class="p-5 rounded-3xl bg-slate-50 border border-slate-100 hover:border-blue-200 transition-colors">
                                    <div class="flex justify-between items-start mb-3">
                                        <div class="w-10 h-10 bg-blue-100 text-blue-600 rounded-xl flex items-center justify-center">
                                            <i data-lucide="thermometer" class="w-5 h-5"></i>
                                        </div>
                                    </div>
                                    <p class="text-[10px] text-slate-400 font-bold mb-1 uppercase tracking-tight">Température</p>
                                    <p class="text-xl font-black text-slate-900 leading-none">4.2°C</p>
                                </div>
                                <div class="p-5 rounded-3xl bg-slate-50 border border-slate-100 hover:border-cyan-200 transition-colors">
                                    <div class="flex justify-between items-start mb-3">
                                        <div class="w-10 h-10 bg-cyan-100 text-cyan-600 rounded-xl flex items-center justify-center">
                                            <i data-lucide="droplets" class="w-5 h-5"></i>
                                        </div>
                                    </div>
                                    <p class="text-[10px] text-slate-400 font-bold mb-1 uppercase tracking-tight">Humidité</p>
                                    <p class="text-xl font-black text-slate-900 leading-none">65%</p>
                                </div>
                                <div class="p-5 rounded-3xl bg-slate-50 border border-slate-100 hover:border-orange-200 transition-colors">
                                    <div class="flex justify-between items-start mb-3">
                                        <div class="w-10 h-10 bg-orange-100 text-orange-600 rounded-xl flex items-center justify-center">
                                            <i data-lucide="wind" class="w-5 h-5"></i>
                                        </div>
                                    </div>
                                    <p class="text-[10px] text-slate-400 font-bold mb-1 uppercase tracking-tight">Gaz (CO2)</p>
                                    <p class="text-xl font-black text-slate-900 leading-none">125 ppm</p>
                                </div>
                                <div class="p-5 rounded-3xl bg-slate-50 border border-slate-100 hover:border-emerald-200 transition-colors">
                                    <div class="flex justify-between items-start mb-3">
                                        <div class="w-10 h-10 bg-emerald-100 text-emerald-600 rounded-xl flex items-center justify-center">
                                            <i data-lucide="activity" class="w-5 h-5"></i>
                                        </div>
                                    </div>
                                    <p class="text-[10px] text-slate-400 font-bold mb-1 uppercase tracking-tight">Qualité Air</p>
                                    <p class="text-xl font-black text-slate-900 leading-none">A++</p>
                                </div>
                            </div>
                        </div>

                        <!-- Lieux de Collecte (Carte & Liste) -->
                        <div class="bg-white p-8 rounded-[2.5rem] border border-slate-100 shadow-sm">
                            <div class="flex justify-between items-center mb-6">
                                <h4 class="text-sm font-extrabold text-slate-800 uppercase tracking-tight">Points de Collecte</h4>
                                <button class="p-2 bg-blue-50 text-blue-600 rounded-xl hover:bg-blue-600 hover:text-white transition-all">
                                    <i data-lucide="map" class="w-4 h-4"></i>
                                </button>
                            </div>
                            <div class="space-y-4">
                                <div class="flex items-center justify-between p-4 bg-slate-50 rounded-2xl border border-slate-50 hover:bg-white hover:shadow-lg hover:shadow-slate-200/40 transition-all cursor-pointer group">
                                    <div class="flex items-center gap-4">
                                        <div class="w-2.5 h-2.5 bg-emerald-500 rounded-full shadow-sm shadow-emerald-200 ring-4 ring-emerald-50 group-hover:scale-125 transition-transform"></div>
                                        <div>
                                            <p class="text-xs font-black text-slate-800">Port d'Agadir (Centre)</p>
                                            <p class="text-[9px] text-slate-400 font-bold uppercase tracking-tight">30.4278 N, 9.5981 W</p>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <p class="text-xs font-black text-blue-600">142</p>
                                        <p class="text-[8px] text-slate-400 uppercase font-black">Lots</p>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between p-4 bg-slate-50 rounded-2xl border border-slate-50 hover:bg-white hover:shadow-lg hover:shadow-slate-200/40 transition-all cursor-pointer group">
                                    <div class="flex items-center gap-4">
                                        <div class="w-2.5 h-2.5 bg-blue-500 rounded-full shadow-sm shadow-blue-200 ring-4 ring-blue-50 group-hover:scale-125 transition-transform"></div>
                                        <div>
                                            <p class="text-xs font-black text-slate-800">Côte Essaouira</p>
                                            <p class="text-[9px] text-slate-400 font-bold uppercase tracking-tight">31.5084 N, 9.7595 W</p>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <p class="text-xs font-black text-blue-600">89</p>
                                        <p class="text-[8px] text-slate-400 uppercase font-black">Lots</p>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between p-4 bg-slate-50 rounded-2xl border border-slate-50 hover:bg-white hover:shadow-lg hover:shadow-slate-200/40 transition-all cursor-pointer group">
                                    <div class="flex items-center gap-4">
                                        <div class="w-2.5 h-2.5 bg-orange-400 rounded-full shadow-sm shadow-orange-200 ring-4 ring-orange-50 group-hover:scale-125 transition-transform"></div>
                                        <div>
                                            <p class="text-xs font-black text-slate-800">Sidi Ifni (Terminal)</p>
                                            <p class="text-[9px] text-slate-400 font-bold uppercase tracking-tight">29.3797 N, 10.1731 W</p>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <p class="text-xs font-black text-blue-600">56</p>
                                        <p class="text-[8px] text-slate-400 uppercase font-black">Lots</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- Scripting pour les Graphiques et les Icônes -->
    <script>
        // Initialisation des icônes Lucide
        lucide.createIcons();

        // Configuration du Graphique Linéaire (Main Chart)
        const ctx = document.getElementById('mainChart').getContext('2d');
        
        // Création d'un gradient pour le graphique
        const gradient = ctx.createLinearGradient(0, 0, 0, 400);
        gradient.addColorStop(0, 'rgba(59, 130, 246, 0.2)');
        gradient.addColorStop(1, 'rgba(59, 130, 246, 0.0)');

        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['00:00', '04:00', '08:00', '12:00', '16:00', '20:00', '24:00'],
                datasets: [{
                    label: 'Score de Fraîcheur (%)',
                    data: [98, 95, 92, 88, 80, 75, 65],
                    borderColor: '#2563eb',
                    borderWidth: 4,
                    backgroundColor: gradient,
                    fill: true,
                    tension: 0.4,
                    pointBackgroundColor: '#fff',
                    pointBorderColor: '#2563eb',
                    pointBorderWidth: 3,
                    pointRadius: 5,
                    pointHoverRadius: 8,
                    pointHoverBorderWidth: 4
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: { display: false },
                    tooltip: {
                        backgroundColor: '#0f172a',
                        titleFont: { size: 12, weight: 'bold' },
                        padding: 12,
                        cornerRadius: 12,
                        displayColors: false
                    }
                },
                scales: {
                    y: { 
                        min: 0, 
                        max: 100, 
                        grid: { borderDash: [5, 5], color: '#f1f5f9', drawBorder: false },
                        ticks: { font: { size: 10, weight: '600' }, color: '#94a3b8', padding: 10 }
                    },
                    x: { 
                        grid: { display: false },
                        ticks: { font: { size: 10, weight: '600' }, color: '#94a3b8', padding: 10 }
                    }
                }
            }
        });
    </script>
</body>
</html>