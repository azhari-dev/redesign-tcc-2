<!DOCTYPE html>
<html lang="id">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <title>Trunojoyo Creative Competition 2025</title>
    <meta name="description" content="Trunojoyo Creative Competition 2025 - Wadah kolaborasi, eksplorasi, dan pengembangan diri di bidang teknologi informasi dan komunikasi" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" href="img/icon-tcc.png">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'poppins': ['Poppins', 'sans-serif'],
                        'righteous': ['Righteous', 'cursive'],
                    },
                    colors: {
                        'primary': {
                            50: '#F0FDF1',
                            100: '#DDFBE0',
                            200: '#BDFBC5',
                            300: '#89EC97',
                            400: '#4EDA62',
                            500: '#27C03D',
                            600: '#1DB233',
                            700: '#187D28',
                            800: '#186324',
                            900: '#165120',
                            950: '#062D0D',
                        },
                        'secondary': {
                            50: '#FFFFE7',
                            100: '#FEFFC1',
                            200: '#FFFD86',
                            300: '#FFF341',
                            400: '#FFE40D',
                            500: '#FFD500',
                            600: '#D19C00',
                            700: '#A67002',
                            800: '#89570A',
                            900: '#74470F',
                            950: '#442504',
                        }
                    },
                    backgroundImage: {
                        'hero-gradient': 'linear-gradient(92deg, #187D28 0%, #DDE589 100%)',
                        'card-gradient': 'linear-gradient(135deg, #F0FDF1 0%, #E8F9F9 100%)',
                    },
                    boxShadow: {
                        '3d': '2px 2px 4px 0 rgba(178, 222, 203, 0.75) inset, -2px -2px 2px 0 rgba(0, 39, 12, 0.35) inset',
                        '3d-light': '2px 2px 4px 0 rgba(178, 222, 203, 0.75) inset, -2px -2px 2px 0 rgba(0, 39, 12, 0.00) inset',
                    }
                }
            }
        }
    </script>
</head>

<body class="font-poppins bg-white overflow-x-hidden">
    <?php include 'navbar.php'; ?>

    <!-- Main Content -->
    <main class="pt-16 w-[90%] mx-auto">
        <?php include 'home.php'; ?>
        <?php include 'competitions.php'; ?>
        <?php include 'events.php'; ?>
        <?php include 'sponsor.php'; ?>
        <?php include 'absolute_elements.php'; ?>
    </main>

    <?php include 'footer.php'; ?>

    <!-- JavaScript -->
    <script src="main.js"></script>
</body>

</html>