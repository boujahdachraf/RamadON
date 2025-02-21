<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ramadan 2025 - Accueil</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        ramadan: {
                            primary: '#6A4C93',  // Violet profond
                            secondary: '#8D8741', // Vert olive
                            accent: '#F4AF23',    // Or/Ambre
                            light: '#F8F9FA',     // Blanc cassé
                            dark: '#2A324B'       // Bleu nuit
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gradient-to-b from-ramadan-dark to-ramadan-primary min-h-screen">
    <!-- Navigation -->
    <nav class="bg-ramadan-dark/80 backdrop-blur-md text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="#" class="text-2xl font-bold text-ramadan-accent">
                <i class="fas fa-moon"></i> Ramadan 2025
            </a>
            <div class="space-x-4">
                <a href="/home" class="text-ramadan-accent font-medium">Accueil</a>
                <a href="{{ route('experiences.index') }}" class="hover:text-ramadan-accent transition">Expériences</a>
                <a href="#" class="hover:text-ramadan-accent transition">Recettes</a>
                <a href="#" class="hover:text-ramadan-accent transition">Statistiques</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="relative">
        <div class="h-96 bg-[url('/api/placeholder/1920/500')] bg-cover bg-center">
            <div class="absolute inset-0 bg-ramadan-dark/70"></div>
            <div class="container mx-auto px-4 h-full flex items-center justify-center relative z-10">
                <div class="text-center">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-ramadan-accent mb-4">Ramadan Moubarak 2025</h1>
                    <p class="text-white text-xl md:text-2xl max-w-2xl mx-auto mb-8">Partagez vos expériences, découvrez de nouvelles recettes et connectez-vous avec la communauté pendant ce mois sacré</p>
                    <div class="flex flex-wrap justify-center gap-4">
                        <a href="#" class="bg-ramadan-accent hover:bg-ramadan-accent/80 text-ramadan-dark font-bold py-3 px-8 rounded-full transition">
                            Explorer les expériences
                        </a>
                        <a href="#" class="bg-white/20 hover:bg-white/30 text-white font-bold py-3 px-8 rounded-full transition">
                            Découvrir les recettes
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-12">
        <!-- Featured Sections -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
            <!-- Featured Experiences -->
            <div class="bg-white/10 backdrop-blur-md rounded-lg p-6 border border-ramadan-accent/30">
                <div class="flex items-center mb-4">
                    <i class="fas fa-book-open text-ramadan-accent text-3xl mr-4"></i>
                    <h2 class="text-2xl font-bold text-ramadan-accent">Expériences</h2>
                </div>
                <p class="text-white/90 mb-6">Partagez vos moments spirituels et vos traditions familiales avec la communauté.</p>
                <div class="space-y-4 mb-6">
                    <div class="flex items-start space-x-3">
                        <img src="/api/placeholder/100/100" alt="Photo de profil" class="w-10 h-10 rounded-full mt-1">
                        <div>
                            <h3 class="font-medium text-ramadan-accent">Mon premier Iftar en famille</h3>
                            <p class="text-white/80 text-sm">Cette année, j'ai eu la chance de partager l'iftar avec toute ma famille réunie...</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-3">
                        <img src="/api/placeholder/100/100" alt="Photo de profil" class="w-10 h-10 rounded-full mt-1">
                        <div>
                            <h3 class="font-medium text-ramadan-accent">La prière de Tarawih à la mosquée</h3>
                            <p class="text-white/80 text-sm">Après deux ans d'absence due à la pandémie, j'ai enfin pu retrouver l'atmosphère...</p>
                        </div>
                    </div>
                </div>
                <a href="#" class="block text-center bg-ramadan-primary/50 hover:bg-ramadan-primary text-white py-2 px-4 rounded transition">
                    Voir toutes les expériences
                </a>
            </div>

            <!-- Featured Recipes -->
            <div class="bg-white/10 backdrop-blur-md rounded-lg p-6 border border-ramadan-accent/30">
                <div class="flex items-center mb-4">
                    <i class="fas fa-utensils text-ramadan-accent text-3xl mr-4"></i>
                    <h2 class="text-2xl font-bold text-ramadan-accent">Recettes</h2>
                </div>
                <p class="text-white/90 mb-6">Découvrez des recettes traditionnelles et modernes pour l'Iftar et le Suhoor.</p>
                <div class="space-y-4 mb-6">
                    <div class="flex items-start space-x-3">
                        <div class="bg-ramadan-accent/20 p-1 rounded">
                            <img src="/api/placeholder/100/100" alt="Harira" class="w-10 h-10 object-cover rounded">
                        </div>
                        <div>
                            <h3 class="font-medium text-ramadan-accent">Harira Marocaine Traditionnelle</h3>
                            <p class="text-white/80 text-sm"><i class="far fa-star text-ramadan-accent"></i> 4.8/5 • Soupe • 60 min</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-3">
                        <div class="bg-ramadan-accent/20 p-1 rounded">
                            <img src="/api/placeholder/100/100" alt="Baklava" class="w-10 h-10 object-cover rounded">
                        </div>
                        <div>
                            <h3 class="font-medium text-ramadan-accent">Baklava au Miel et aux Pistaches</h3>
                            <p class="text-white/80 text-sm"><i class="far fa-star text-ramadan-accent"></i> 4.9/5 • Dessert • 90 min</p>
                        </div>
                    </div>
                </div>
                <a href="#" class="block text-center bg-ramadan-primary/50 hover:bg-ramadan-primary text-white py-2 px-4 rounded transition">
                    Explorer toutes les recettes
                </a>
            </div>

            <!-- Community & Stats -->
            <div class="bg-white/10 backdrop-blur-md rounded-lg p-6 border border-ramadan-accent/30">
                <div class="flex items-center mb-4">
                    <i class="fas fa-chart-line text-ramadan-accent text-3xl mr-4"></i>
                    <h2 class="text-2xl font-bold text-ramadan-accent">Communauté</h2>
                </div>
                <p class="text-white/90 mb-6">Rejoignez une communauté vibrante qui partage l'esprit du Ramadan.</p>
                
                <div class="space-y-4 mb-6">
                    <div class="flex items-center justify-between">
                        <span class="text-white/90">Membres actifs</span>
                        <span class="text-ramadan-accent font-bold">1,248</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-white/90">Expériences partagées</span>
                        <span class="text-ramadan-accent font-bold">327</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-white/90">Recettes publiées</span>
                        <span class="text-ramadan-accent font-bold">189</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-white/90">Commentaires</span>
                        <span class="text-ramadan-accent font-bold">2,756</span>
                    </div>
                </div>
                
                <a href="#" class="block text-center bg-ramadan-primary/50 hover:bg-ramadan-primary text-white py-2 px-4 rounded transition">
                    Voir les statistiques détaillées
                </a>
            </div>
        </div>

        <!-- Calendar Section -->
        <div class="bg-white/10 backdrop-blur-md rounded-lg p-6 border border-ramadan-accent/30 mb-16">
            <h2 class="text-2xl font-bold text-ramadan-accent mb-6">Calendrier du Ramadan 2025</h2>
            
            <div class="relative overflow-x-auto">
                <div class="grid grid-cols-7 gap-4 mb-4">
                    <div class="text-center text-ramadan-accent font-medium">Lun</div>
                    <div class="text-center text-ramadan-accent font-medium">Mar</div>
                    <div class="text-center text-ramadan-accent font-medium">Mer</div>
                    <div class="text-center text-ramadan-accent font-medium">Jeu</div>
                    <div class="text-center text-ramadan-accent font-medium">Ven</div>
                    <div class="text-center text-ramadan-accent font-medium">Sam</div>
                    <div class="text-center text-ramadan-accent font-medium">Dim</div>
                </div>
                
                <div class="grid grid-cols-7 gap-4">
                    <!-- Semaine 1 -->
                    <div class="text-center text-white/40">28</div>
                    <div class="text-center text-white/40">29</div>
                    <div class="text-center text-white/40">30</div>
                    <div class="text-center text-white/40">31</div>
                    <div class="text-center bg-ramadan-accent/20 rounded-lg p-2">
                        <div class="text-white font-bold">1</div>
                        <div class="text-sm text-white/80">Début du Ramadan</div>
                    </div>
                    <div class="text-center p-2">
                        <div class="text-white">2</div>
                    </div>
                    <div class="text-center p-2">
                        <div class="text-white">3</div>
                    </div>
                    
                    <!-- Semaine 2 -->
                    <div class="text-center p-2">
                        <div class="text-white">4</div>
                    </div>
                    <div class="text-center p-2">
                        <div class="text-white">5</div>
                    </div>
                    <div class="text-center p-2">
                        <div class="text-white">6</div>
                    </div>
                    <div class="text-center p-2">
                        <div class="text-white">7</div>
                    </div>
                    <div class="text-center p-2">
                        <div class="text-white">8</div>
                    </div>
                    <div class="text-center p-2">
                        <div class="text-white">9</div>
                    </div>
                    <div class="text-center p-2">
                        <div class="text-white">10</div>
                    </div>
                    
                    <!-- Semaine 3 (partielle) -->
                    <div class="text-center p-2">
                        <div class="text-white">11</div>
                    </div>
                    <div class="text-center p-2">
                        <div class="text-white">12</div>
                    </div>
                    <div class="text-center bg-ramadan-primary/40 rounded-lg p-2">
                        <div class="text-white font-bold">13</div>
                        <div class="text-sm text-white/80">Aujourd'hui</div>
                    </div>
                    <div class="text-center p-2">...</div>
                    <div class="text-center p-2">...</div>
                    <div class="text-center p-2">...</div>
                    <div class="text-center p-2">...</div>
                </div>
            </div>
            
            <div class="mt-6 flex justify-between items-center">
                <div class="text-white">
                    <p><span class="text-ramadan-accent font-bold">Iftar aujourd'hui:</span> 19:24</p>
                    <p><span class="text-ramadan-accent font-bold">Suhoor demain:</span> 05:12</p>
                </div>
                <a href="#" class="bg-ramadan-primary/50 hover:bg-ramadan-primary text-white py-2 px-4 rounded transition">
                    Calendrier complet
                </a>
            </div>
        </div>
        
        <!-- Recent Activity -->
        <div class="mb-16">
            <h2 class="text-2xl font-bold text-ramadan-accent mb-6">Activité Récente</h2>
            
            <div class="space-y-6">
                <div class="bg-white/10 backdrop-blur-md rounded-lg p-4 border-l-4 border-ramadan-accent">
                    <div class="flex items-start">
                        <img src="/api/placeholder/100/100" alt="Photo de profil" class="w-10 h-10 rounded-full mr-4">
                        <div>
                            <p class="text-white"><span class="font-medium text-ramadan-accent">Amina K.</span> a partagé une nouvelle expérience: <span class="font-medium">Mon premier Iftar en famille</span></p>
                            <p class="text-white/60 text-sm">Il y a 2 heures</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white/10 backdrop-blur-md rounded-lg p-4 border-l-4 border-ramadan-accent">
                    <div class="flex items-start">
                        <img src="/api/placeholder/100/100" alt="Photo de profil" class="w-10 h-10 rounded-full mr-4">
                        <div>
                            <p class="text-white"><span class="font-medium text-ramadan-accent">Omar L.</span> a ajouté une nouvelle recette: <span class="font-medium">Tajine d'Agneau aux Pruneaux</span></p>
                            <p class="text-white/60 text-sm">Il y a 5 heures</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white/10 backdrop-blur-md rounded-lg p-4 border-l-4 border-ramadan-accent">
                    <div class="flex items-start">
                        <img src="/api/placeholder/100/100" alt="Photo de profil" class="w-10 h-10 rounded-full mr-4">
                        <div>
                            <p class="text-white"><span class="font-medium text-ramadan-accent">Leila B.</span> a commenté sur l'expérience: <span class="font-medium">Distribution de repas aux sans-abris</span></p>
                            <p class="text-white/60 text-sm">Il y a 8 heures</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-8">
                <button class="bg-ramadan-primary hover:bg-ramadan-primary/80 text-white py-2 px-8 rounded-full transition">
                    Voir toute l'activité <i class="fas fa-angle-down ml-2"></i>
                </button>
            </div>
        </div>
        
        <!-- Inspirational Quote -->
        <div class="bg-gradient-to-r from-ramadan-primary to-ramadan-dark rounded-lg p-8 text-center mb-16">
            <i class="fas fa-quote-left text-ramadan-accent/30 text-5xl mb-4"></i>
            <blockquote class="text-xl md:text-2xl text-white mb-4">
                "Le Ramadan est le mois où les portes du paradis sont ouvertes, les portes de l'enfer sont fermées et les démons sont enchaînés."
            </blockquote>
            <cite class="text-ramadan-accent">— Hadith rapporté par Al-Bukhari</cite>
        </div>
        
        <!-- Newsletter -->
        <div class="bg-white/10 backdrop-blur-md rounded-lg p-6 border border-ramadan-accent/30">
            <div class="md:flex items-center justify-between">
                <div class="mb-6 md:mb-0 md:mr-8">
                    <h2 class="text-2xl font-bold text-ramadan-accent mb-2">Restez connecté pendant le Ramadan</h2>
                    <p class="text-white/90">Inscrivez-vous pour recevoir nos meilleures recettes, conseils spirituels et rappels quotidiens.</p>
                </div>
                <div class="flex flex-col sm:flex-row w-full md:w-auto">
                    <input type="email" placeholder="Votre email" class="bg-ramadan-dark/50 border border-ramadan-primary rounded-l-md p-3 text-white flex-grow mb-2 sm:mb-0">
                    <button class="bg-ramadan-accent hover:bg-ramadan-accent/80 text-ramadan-dark font-bold p-3 rounded-r-md transition">
                        S'inscrire
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-ramadan-dark/80 backdrop-blur-md text-white py-8 mt-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
                <div>
                    <h3 class="text-xl font-bold text-ramadan-accent mb-4">Ramadan 2025</h3>
                    <p class="text-white/80 mb-4">Une plateforme pour partager l'esprit du Ramadan et se connecter avec la communauté.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-ramadan-accent hover:text-ramadan-secondary transition"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-ramadan-accent hover:text-ramadan-secondary transition"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-ramadan-accent hover:text-ramadan-secondary transition"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                
                <div>
                    <h3 class="font-bold text-white mb-4">Navigation</h3>
                    <ul class="space-y-2 text-white/80">
                        <li><a href="#" class="hover:text-ramadan-accent transition">Accueil</a></li>
                        <li><a href="#" class="hover:text-ramadan-accent transition">Expériences</a></li>
                        <li><a href="#" class="hover:text-ramadan-accent transition">Recettes</a></li>
                        <li><a href="#" class="hover:text-ramadan-accent transition">Statistiques</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="font-bold text-white mb-4">Ressources</h3>
                    <ul class="space-y-2 text-white/80">
                        <li><a href="#" class="hover:text-ramadan-accent transition">Calendrier du Ramadan</a></li>
                        <li><a href="#" class="hover:text-ramadan-accent transition">Horaires de prière</a></li>
                        <li><a href="#" class="hover:text-ramadan-accent transition">Guide spirituel</a></li>
                        <li><a href="#" class="hover:text-ramadan-accent transition">FAQ</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="font-bold text-white mb-4">Contact</h3>
                    <ul class="space-y-2 text-white/80">
                        <li><a href="#" class="hover:text-ramadan-accent transition">À propos</a></li>
                        <li><a href="#" class="hover:text-ramadan-accent transition">Nous contacter</a></li>
                        <li><a href="#" class="hover:text-ramadan-accent transition">Conditions d'utilisation</a></li>
                        <li><a href="#" class="hover:text-ramadan-accent transition">Politique de confidentialité</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-white/20 pt-6 text-center">
                <p>© 2025 Ramadan Experiences - Tous droits réservés</p>
            </div>
        </div>
    </footer>
</body>
</html>