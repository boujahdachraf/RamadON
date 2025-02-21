<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ramadan 2025 - Recettes</title>
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
                <a href="#" class="hover:text-ramadan-accent transition">Accueil</a>
                <a href="#" class="hover:text-ramadan-accent transition">Expériences</a>
                <a href="#" class="text-ramadan-accent font-medium">Recettes</a>
                <a href="#" class="hover:text-ramadan-accent transition">Statistiques</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-3xl font-bold text-ramadan-accent">Recettes pour l'Iftar et le Suhoor</h1>
            <button id="add-recipe-btn" class="bg-ramadan-accent hover:bg-ramadan-accent/80 text-ramadan-dark font-bold py-2 px-6 rounded-full transition">
                <i class="fas fa-plus mr-2"></i> Ajouter une recette
            </button>
        </div>

        <!-- Category Filters -->
        <div class="mb-8">
            <div class="flex flex-wrap gap-4">
                <button class="category-filter bg-ramadan-accent text-ramadan-dark font-medium py-2 px-6 rounded-full transition">
                    Toutes les recettes
                </button>
                <button class="category-filter bg-white/20 hover:bg-ramadan-accent hover:text-ramadan-dark text-white font-medium py-2 px-6 rounded-full transition">
                    Entrées
                </button>
                <button class="category-filter bg-white/20 hover:bg-ramadan-accent hover:text-ramadan-dark text-white font-medium py-2 px-6 rounded-full transition">
                    Plats principaux
                </button>
                <button class="category-filter bg-white/20 hover:bg-ramadan-accent hover:text-ramadan-dark text-white font-medium py-2 px-6 rounded-full transition">
                    Soupes
                </button>
                <button class="category-filter bg-white/20 hover:bg-ramadan-accent hover:text-ramadan-dark text-white font-medium py-2 px-6 rounded-full transition">
                    Desserts
                </button>
                <button class="category-filter bg-white/20 hover:bg-ramadan-accent hover:text-ramadan-dark text-white font-medium py-2 px-6 rounded-full transition">
                    Boissons
                </button>
                <button class="category-filter bg-white/20 hover:bg-ramadan-accent hover:text-ramadan-dark text-white font-medium py-2 px-6 rounded-full transition">
                    Spécial Suhoor
                </button>
            </div>
        </div>

        <!-- Form (Hidden by default) -->
        <div id="recipe-form" class="bg-white/10 backdrop-blur-md rounded-lg p-6 mb-10 hidden">
            <h2 class="text-xl font-semibold text-ramadan-accent mb-4">Partagez votre recette</h2>
            <form>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                    <div>
                        <label class="block text-white mb-2" for="recipe-title">Titre de la recette</label>
                        <input type="text" id="recipe-title" class="w-full bg-ramadan-dark/50 border border-ramadan-primary rounded-md p-2 text-white" placeholder="Ex: Harira traditionnelle">
                    </div>
                    <div>
                        <label class="block text-white mb-2" for="recipe-category">Catégorie</label>
                        <select id="recipe-category" class="w-full bg-ramadan-dark/50 border border-ramadan-primary rounded-md p-2 text-white">
                            <option value="">Choisir une catégorie</option>
                            <option value="entree">Entrée</option>
                            <option value="plat">Plat principal</option>
                            <option value="soupe">Soupe</option>
                            <option value="dessert">Dessert</option>
                            <option value="boisson">Boisson</option>
                            <option value="suhoor">Spécial Suhoor</option>
                        </select>
                    </div>
                </div>
                <div class="mb-4">
                    <label class="block text-white mb-2" for="recipe-desc">Description</label>
                    <textarea id="recipe-desc" rows="2" class="w-full bg-ramadan-dark/50 border border-ramadan-primary rounded-md p-2 text-white" placeholder="Une courte description de votre recette..."></textarea>
                </div>
                <div class="mb-4">
                    <label class="block text-white mb-2" for="recipe-ingredients">Ingrédients</label>
                    <textarea id="recipe-ingredients" rows="4" class="w-full bg-ramadan-dark/50 border border-ramadan-primary rounded-md p-2 text-white" placeholder="Listez vos ingrédients (un par ligne)"></textarea>
                </div>
                <div class="mb-4">
                    <label class="block text-white mb-2" for="recipe-instructions">Instructions</label>
                    <textarea id="recipe-instructions" rows="5" class="w-full bg-ramadan-dark/50 border border-ramadan-primary rounded-md p-2 text-white" placeholder="Détaillez les étapes de préparation..."></textarea>
                </div>
                <div class="mb-4">
                    <label class="block text-white mb-2" for="recipe-image">Photo du plat (optionnelle)</label>
                    <input type="file" id="recipe-image" class="w-full bg-ramadan-dark/50 border border-ramadan-primary rounded-md p-2 text-white">
                </div>
                <div class="flex justify-end space-x-4">
                    <button type="button" id="cancel-recipe-btn" class="bg-gray-600 hover:bg-gray-700 text-white py-2 px-4 rounded transition">Annuler</button>
                    <button type="submit" class="bg-ramadan-accent hover:bg-ramadan-accent/80 text-ramadan-dark font-bold py-2 px-4 rounded transition">Publier la recette</button>
                </div>
            </form>
        </div>

        <!-- Recipe Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Recipe Card 1 -->
            <div class="bg-white/10 backdrop-blur-md rounded-lg overflow-hidden hover:shadow-lg hover:shadow-ramadan-accent/20 transition">
                <div class="relative">
                    <img src="/api/placeholder/600/300" alt="Harira" class="w-full h-48 object-cover">
                    <span class="absolute top-3 right-3 bg-ramadan-accent text-ramadan-dark text-xs font-bold px-2 py-1 rounded-full">Soupe</span>
                </div>
                <div class="p-4">
                    <h3 class="text-xl font-bold text-ramadan-accent mb-2">Harira Marocaine Traditionnelle</h3>
                    <p class="text-white/90 mb-3">Cette soupe traditionnelle est parfaite pour l'iftar, riche en protéines et en saveurs.</p>
                    <div class="flex items-center justify-between text-white/80 text-sm mb-4">
                        <span><i class="far fa-clock mr-1"></i> 60 min</span>
                        <span><i class="far fa-star mr-1"></i> 4.8/5 (24 avis)</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <div class="flex items-center space-x-2">
                            <img src="/api/placeholder/50/50" alt="Photo de profil" class="w-8 h-8 rounded-full">
                            <span class="text-white/80">Fatima Z.</span>
                        </div>
                        <button class="bg-ramadan-primary hover:bg-ramadan-primary/80 text-white py-1 px-3 rounded transition text-sm">
                            Voir la recette
                        </button>
                    </div>
                </div>
            </div>

            <!-- Recipe Card 2 -->
            <div class="bg-white/10 backdrop-blur-md rounded-lg overflow-hidden hover:shadow-lg hover:shadow-ramadan-accent/20 transition">
                <div class="relative">
                    <img src="/api/placeholder/600/300" alt="Baklava" class="w-full h-48 object-cover">
                    <span class="absolute top-3 right-3 bg-ramadan-accent text-ramadan-dark text-xs font-bold px-2 py-1 rounded-full">Dessert</span>
                </div>
                <div class="p-4">
                    <h3 class="text-xl font-bold text-ramadan-accent mb-2">Baklava au Miel et aux Pistaches</h3>
                    <p class="text-white/90 mb-3">Ce délicieux dessert feuilleté au miel et aux pistaches est parfait pour terminer votre iftar.</p>
                    <div class="flex items-center justify-between text-white/80 text-sm mb-4">
                        <span><i class="far fa-clock mr-1"></i> 90 min</span>
                        <span><i class="far fa-star mr-1"></i> 4.9/5 (32 avis)</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <div class="flex items-center space-x-2">
                            <img src="/api/placeholder/50/50" alt="Photo de profil" class="w-8 h-8 rounded-full">
                            <span class="text-white/80">Ahmed S.</span>
                        </div>
                        <button class="bg-ramadan-primary hover:bg-ramadan-primary/80 text-white py-1 px-3 rounded transition text-sm">
                            Voir la recette
                        </button>
                    </div>
                </div>
            </div>

            <!-- Recipe Card 3 -->
            <div class="bg-white/10 backdrop-blur-md rounded-lg overflow-hidden hover:shadow-lg hover:shadow-ramadan-accent/20 transition">
                <div class="relative">
                    <img src="/api/placeholder/600/300" alt="Smoothie" class="w-full h-48 object-cover">
                    <span class="absolute top-3 right-3 bg-ramadan-accent text-ramadan-dark text-xs font-bold px-2 py-1 rounded-full">Boisson</span>
                </div>
                <div class="p-4">
                    <h3 class="text-xl font-bold text-ramadan-accent mb-2">Smoothie Énergétique pour le Suhoor</h3>
                    <p class="text-white/90 mb-3">Ce smoothie aux dattes, banane et lait d'amande vous donnera l'énergie nécessaire pour la journée.</p>
                    <div class="flex items-center justify-between text-white/80 text-sm mb-4">
                        <span><i class="far fa-clock mr-1"></i> 10 min</span>
                        <span><i class="far fa-star mr-1"></i> 4.7/5 (18 avis)</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <div class="flex items-center space-x-2">
                            <img src="/api/placeholder/50/50" alt="Photo de profil" class="w-8 h-8 rounded-full">
                            <span class="text-white/80">Nadia T.</span>
                        </div>
                        <button class="bg-ramadan-primary hover:bg-ramadan-primary/80 text-white py-1 px-3 rounded transition text-sm">
                            Voir la recette
                        </button>
                    </div>
                </div>
            </div>

            <!-- Recipe Card 4 -->
            <div class="bg-white/10 backdrop-blur-md rounded-lg overflow-hidden hover:shadow-lg hover:shadow-ramadan-accent/20 transition">
                <div class="relative">
                    <img src="/api/placeholder/600/300" alt="Tajine" class="w-full h-48 object-cover">
                    <span class="absolute top-3 right-3 bg-ramadan-accent text-ramadan-dark text-xs font-bold px-2 py-1 rounded-full">Plat principal</span>
                </div>
                <div class="p-4">
                    <h3 class="text-xl font-bold text-ramadan-accent mb-2">Tajine d'Agneau aux Pruneaux</h3>
                    <p class="text-white/90 mb-3">Un plat savoureux qui mélange le salé et le sucré, parfait pour un iftar spécial.</p>
                    <div class="flex items-center justify-between text-white/80 text-sm mb-4">
                        <span><i class="far fa-clock mr-1"></i> 120 min</span>
                        <span><i class="far fa-star mr-1"></i> 4.9/5 (42 avis)</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <div class="flex items-center space-x-2">
                            <img src="/api/placeholder/50/50" alt="Photo de profil" class="w-8 h-8 rounded-full">
                            <span class="text-white/80">Omar L.</span>
                        </div>
                        <button class="bg-ramadan-primary hover:bg-ramadan-primary/80 text-white py-1 px-3 rounded transition text-sm">
                            Voir la recette
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Load More Button -->
        <div class="text-center mt-8">
            <button class="bg-ramadan-primary hover:bg-ramadan-primary/80 text-white py-2 px-8 rounded-full transition">
                Voir plus de recettes <i class="fas fa-angle-down ml-2"></i>
            </button>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-ramadan-dark/80 backdrop-blur-md text-white py-6 mt-12">
        <div class="container mx-auto px-4 text-center">
            <p>© 2025 Ramadan Experiences - Tous droits réservés</p>
            <div class="flex justify-center space-x-4 mt-4">
                <a href="#" class="text-ramadan-accent hover:text-ramadan-secondary transition"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="text-ramadan-accent hover:text-ramadan-secondary transition"><i class="fab fa-twitter"></i></a>
                <a href="#" class="text-ramadan-accent hover:text-ramadan-secondary transition"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </footer>

    <script>
        // Toggle recipe form
        document.getElementById('add-recipe-btn').addEventListener('click', function() {
            document.getElementById('recipe-form').classList.remove('hidden');
        });
        
        document.getElementById('cancel-recipe-btn').addEventListener('click', function() {
            document.getElementById('recipe-form').classList.add('hidden');
        });
        
        // Category filter buttons
        const categoryButtons = document.querySelectorAll('.category-filter');
        categoryButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Remove active class from all buttons
                categoryButtons.forEach(btn => {
                    btn.classList.remove('bg-ramadan-accent', 'text-ramadan-dark');
                    btn.classList.add('bg-white/20', 'text-white');
                    btn.classList.add('hover:bg-ramadan-accent', 'hover:text-ramadan-dark');
                });
                
                // Add active class to clicked button
                this.classList.add('bg-ramadan-accent', 'text-ramadan-dark');
                this.classList.remove('bg-white/20', 'text-white');
                this.classList.remove('hover:bg-ramadan-accent', 'hover:text-ramadan-dark');
                
                // In a real application, we would filter recipes here
                console.log('Filter by:', this.textContent.trim());
            });
        });
    </script>
</body>
</html>