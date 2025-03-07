<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <!-- App css -->
    <link href="{{ asset('assets/dist/css/bootstrap-icons.css') }}" rel="stylesheet" type="text/css" id="app-stylesheet" />
    <link href="{{ asset('assets/dist/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-stylesheet" />
    <link href="{{ asset('assets/dist/css/darkmode.css') }}" rel="stylesheet" type="text/css" id="app-stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>



    @include('layouts.darkmode')
    @include('layouts.header')
    <main style="padding: 20px; margin-top: 20px;">
    <!-- <div class="container mt-5">
    <div class="row">
        <div class="col-md-8">
            <h1>About Call of Duty Game</h1>
            <p>Call of Duty is a popular first-person shooter video game franchise developed by Infinity Ward, Treyarch, and Sledgehammer Games. Known for its gripping single-player campaigns, multiplayer modes, and cooperative gameplay, Call of Duty has become one of the most successful video game franchises in history. The game is set in various time periods, ranging from World War II to modern and futuristic warfare, offering players an immersive and action-packed experience.</p>

            <h2>Key Features</h2>
            <ul>
                <li><strong>Engaging Campaigns:</strong> Experience cinematic storytelling through immersive campaigns set in different historical and futuristic settings.</li>
                <li><strong>Multiplayer Modes:</strong> Battle against other players in various multiplayer modes, including Team Deathmatch, Domination, and Search and Destroy.</li>
                <li><strong>Co-op Gameplay:</strong> Team up with friends for cooperative missions, survival modes, and special operations.</li>
                <li><strong>Customization:</strong> Customize weapons, loadouts, and characters to match your playstyle.</li>
                <li><strong>Battle Royale Mode:</strong> Enter a massive map in a last-player-standing mode in titles like Warzone.</li>
                <li><strong>Frequent Updates:</strong> Regular content updates, including new maps, weapons, and seasonal events, keep the game fresh and exciting.</li>
                <li><strong>Cross-Platform Play:</strong> Play with friends across different platforms, including PC, Xbox, and PlayStation.</li>
            </ul>

            <h2>Our Mission</h2>
            <p>Our mission is to deliver an exhilarating gaming experience with each new installment, pushing the boundaries of game design, storytelling, and multiplayer innovation. Call of Duty aims to provide a diverse range of gameplay modes, from intense single-player experiences to massive multiplayer battles, ensuring that there’s something for every type of player.</p>

            <h2>Recent Success</h2>
            <?php
                $gameTitles = [
                    'Call of Duty: Modern Warfare II',
                    'Call of Duty: Black Ops Cold War',
                    'Call of Duty: Warzone 2.0',
                    'Call of Duty: Vanguard',
                    'Call of Duty: Modern Warfare (2019)'
                ];
                $randomGame = $gameTitles[array_rand($gameTitles)];
            ?>
            <p>We recently celebrated the immense success of <strong><?php echo $randomGame; ?></strong>, which garnered millions of players worldwide, dominating the gaming charts and further cementing Call of Duty’s place as a leader in the first-person shooter genre.</p>

            <h2>Contact Us</h2>
            <p>If you have any questions or would like to learn more about Call of Duty or the latest updates, feel free to reach out to us at <a href="mailto:info@callofduty.com">info@callofduty.com</a> or call us at (123) 456-7890.</p>
        </div>

        <div class="col-md-4">
            <img src="../assets/pxfuel.jpg" alt="Call of Duty Image" class="img-fluid rounded shadow">
            <div class="mt-4">
                <h3>Why Play Call of Duty?</h3>
                <ul>
                    <li><strong>Action-Packed Gameplay:</strong> Fast-paced combat with a wide variety of weapons, gadgets, and perks.</li>
                    <li><strong>Global Community:</strong> Join millions of players around the world in intense multiplayer battles.</li>
                    <li><strong>Frequent Content Updates:</strong> Enjoy new content every season, including weapons, skins, and game modes.</li>
                    <li><strong>Compete in Tournaments:</strong> Participate in competitive play and esports tournaments for a chance to win prizes.</li>
                </ul>
            </div>
        </div>
    </div>
</div> -->

    </main>
   

    @include('layouts.footer')

    <script src="{{ asset('assets/js/vendor.min.js') }}"></script>
    <!-- App js -->
    <script src="{{ asset('assets/js/app.min.js') }}"></script>
    <!-- <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script> -->
    <script src="{{ asset('assets/js/theme-switcher.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

   
    
</body>

</html>
