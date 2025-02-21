<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ramadan 2025 - Expériences partagées</title>
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
                <a href="#" class="text-ramadan-accent font-medium">Expériences</a>
                <a href="#" class="hover:text-ramadan-accent transition">Recettes</a>
                <a href="#" class="hover:text-ramadan-accent transition">Statistiques</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-3xl font-bold text-ramadan-accent">Expériences du Ramadan</h1>
            <button id="share-experience-btn" class="bg-ramadan-accent hover:bg-ramadan-accent/80 text-ramadan-dark font-bold py-2 px-6 rounded-full transition">
                <i class="fas fa-plus mr-2"></i> Partager
            </button>
        </div>

        <!-- Form (Hidden by default) -->
        <div id="experience-form" class="bg-white/10 backdrop-blur-md rounded-lg p-6 mb-10 hidden">
            <h2 class="text-xl font-semibold text-ramadan-accent mb-4">Partagez votre expérience</h2>
            <form>
                <div class="mb-4">
                    <label class="block text-white mb-2" for="title">Titre</label>
                    <input type="text" id="title" class="w-full bg-ramadan-dark/50 border border-ramadan-primary rounded-md p-2 text-white" placeholder="Donnez un titre à votre témoignage">
                </div>
                <div class="mb-4">
                    <label class="block text-white mb-2" for="content">Votre témoignage</label>
                    <textarea id="content" rows="5" class="w-full bg-ramadan-dark/50 border border-ramadan-primary rounded-md p-2 text-white" placeholder="Partagez votre expérience..."></textarea>
                </div>
                <div class="mb-4">
                    <label class="block text-white mb-2" for="image">Image (optionnelle)</label>
                    <input type="file" id="image" class="w-full bg-ramadan-dark/50 border border-ramadan-primary rounded-md p-2 text-white">
                </div>
                <div class="flex justify-end space-x-4">
                    <button type="button" id="cancel-btn" class="bg-gray-600 hover:bg-gray-700 text-white py-2 px-4 rounded transition">Annuler</button>
                    <button type="submit" class="bg-ramadan-accent hover:bg-ramadan-accent/80 text-ramadan-dark font-bold py-2 px-4 rounded transition">Publier</button>
                </div>
            </form>
        </div>

        <!-- Experiences Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Experience Card 1 -->
            <div class="bg-white/10 backdrop-blur-md rounded-lg overflow-hidden transition hover:shadow-lg hover:shadow-ramadan-accent/20">
                <img src="/api/placeholder/600/300" alt="Iftar en famille" class="w-full h-48 object-cover">
                <div class="p-4">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="text-xl font-bold text-ramadan-accent">Mon premier Iftar en famille</h3>
                        <span class="text-xs text-white bg-ramadan-primary px-2 py-1 rounded-full">Il y a 2 jours</span>
                    </div>
                    <p class="text-white/90 mb-4">Cette année, j'ai eu la chance de partager l'iftar avec toute ma famille réunie. Un moment inoubliable de partage et de spiritualité...</p>
                    <div class="flex justify-between items-center">
                        <div class="flex items-center space-x-2">
                            <img src="/api/placeholder/50/50" alt="Photo de profil" class="w-8 h-8 rounded-full">
                            <span class="text-white/80">Amina K.</span>
                        </div>
                        <button class="text-ramadan-accent hover:text-ramadan-secondary transition">
                            <i class="far fa-comment"></i> 8 commentaires
                        </button>
                    </div>
                </div>
            </div>

            <!-- Experience Card 2 -->
            <div class="bg-white/10 backdrop-blur-md rounded-lg overflow-hidden transition hover:shadow-lg hover:shadow-ramadan-accent/20">
                <img src="/api/placeholder/600/300" alt="Prière en communauté" class="w-full h-48 object-cover">
                <div class="p-4">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="text-xl font-bold text-ramadan-accent">La prière de Tarawih à la mosquée</h3>
                        <span class="text-xs text-white bg-ramadan-primary px-2 py-1 rounded-full">Il y a 5 jours</span>
                    </div>
                    <p class="text-white/90 mb-4">Après deux ans d'absence due à la pandémie, j'ai enfin pu retrouver l'atmosphère des prières de Tarawih à la mosquée. L'émotion était palpable...</p>
                    <div class="flex justify-between items-center">
                        <div class="flex items-center space-x-2">
                            <img src="/api/placeholder/50/50" alt="Photo de profil" class="w-8 h-8 rounded-full">
                            <span class="text-white/80">Karim M.</span>
                        </div>
                        <button class="text-ramadan-accent hover:text-ramadan-secondary transition">
                            <i class="far fa-comment"></i> 12 commentaires
                        </button>
                    </div>
                </div>
            </div>

            <!-- Experience Card 3 -->
            <div class="bg-white/10 backdrop-blur-md rounded-lg overflow-hidden transition hover:shadow-lg hover:shadow-ramadan-accent/20">
                <img src="/api/placeholder/600/300" alt="Sadaqa" class="w-full h-48 object-cover">
                <div class="p-4">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="text-xl font-bold text-ramadan-accent">Distribution de repas aux sans-abris</h3>
                        <span class="text-xs text-white bg-ramadan-primary px-2 py-1 rounded-full">Hier</span>
                    </div>
                    <p class="text-white/90 mb-4">Notre association a organisé une distribution de repas pour l'iftar hier soir. Voir la joie sur les visages des personnes aidées a été une véritable leçon d'humilité...</p>
                    <div class="flex justify-between items-center">
                        <div class="flex items-center space-x-2">
                            <img src="/api/placeholder/50/50" alt="Photo de profil" class="w-8 h-8 rounded-full">
                            <span class="text-white/80">Leila B.</span>
                        </div>
                        <button class="text-ramadan-accent hover:text-ramadan-secondary transition">
                            <i class="far fa-comment"></i> 5 commentaires
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Load More Button -->
        <div class="text-center mt-8">
            <button class="bg-ramadan-primary hover:bg-ramadan-primary/80 text-white py-2 px-8 rounded-full transition">
                Voir plus d'expériences <i class="fas fa-angle-down ml-2"></i>
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
        document.getElementById('share-experience-btn').addEventListener('click', function() {
            document.getElementById('experience-form').classList.remove('hidden');
        });
        
        document.getElementById('cancel-btn').addEventListener('click', function() {
            document.getElementById('experience-form').classList.add('hidden');
        });
    </script>
</body>
</html>