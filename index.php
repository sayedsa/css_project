<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professional Sports Hub</title>
    <link rel="stylesheet" href="assets/css/main-style.css">
</head>

<body>
    <?php include 'assets/header.php'; ?>
    <main>
        <section class="hero">
            <div class="hero-copy">
                <span class="eyebrow">Welcome to the Sports Hub</span>
                <h1>Inspiring stories from the world's top teams & Players</h1>
                <p>Stay informed with premium team insights, player spotlights, and highlight reels curated for modern sports fans.</p>
                <div class="hero-actions">
                    <a href="#top-teams" class="btn btn-primary">Explore Teams</a>
                    <a href="#videos" class="btn btn-secondary">Watch Highlights</a>
                </div>
            </div>
        </section>

        <section class="overview-grid">
            <article class="overview-card">
                <h2>Team Intelligence</h2>
                <p>Strong analysis, club performance metrics, and up-to-date results presented in a clear, professional format.</p>
            </article>
            <article class="overview-card">
                <h2>Player Profiles</h2>
                <p>Discover player strengths, recent accomplishments, and key attributes across every squad.</p>
            </article>
            <article class="overview-card">
                <h2>Match Highlights</h2>
                <p>Watch the best moments from the latest fixtures, training sessions, and feature stories.</p>
            </article>
        </section>

        <section id="top-teams" class="content-section">
            <div class="section-header">
                <h2>Top Teams & Players</h2>
                <p>Curated selection of elite clubs, roster highlights, and performance summaries.</p>
            </div>
            <div class="cards-row">
                <article class="team-card">
                    <h3>Team Alpha</h3>
                    <img src="assets/images/logo.png" alt="Team Alpha logo" class="team-logo">
                    <p>Focused on tactical excellence, Team Alpha leads with fast transitions and a disciplined defense.</p>
                </article>
                <article class="team-card">
                    <h3>Team Bravo</h3>
                    <img src="assets/images/logo.png" alt="Team Bravo logo" class="team-logo">
                    <p>Known for creative attacking play, Team Bravo combines flair and consistency in every match.</p>
                </article>
                <article class="team-card">
                    <h3>Team Charlie</h3>
                    <img src="assets/images/logo.png" alt="Team Charlie logo" class="team-logo">
                    <p>Team Charlie brings disciplined structure and strong leadership to every competition.</p>
                </article>
            </div>
        </section>

        <section id="videos" class="content-section">
            <div class="section-header">
                <h2>Video Highlights</h2>
                <p>Engaging match recaps and exclusive plays from recent games.</p>
            </div>
            <div class="video-grid">
                <article class="video-card">
                    <iframe src="https://www.youtube.com/embed/ly36kn0ug4k" title="Match highlight video" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <h3>Match Recap</h3>
                    <p>Review the most exciting action and key moments from the latest encounter.</p>
                </article>
                <article class="video-card">
                    <iframe src="https://www.youtube.com/embed/ly36kn0ug4k" title="Team profile video" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <h3>Player Spotlight</h3>
                    <p>Watch top performers showcase their skills in this exclusive feature.</p>
                </article>
                <article class="video-card">
                    <iframe src="https://www.youtube.com/embed/ly36kn0ug4k" title="Strategy breakdown video" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <h3>Strategy Breakdown</h3>
                    <p>See how strong formations and player roles combine to create winning results.</p>
                </article>
            </div>
        </section>
    </main>

    <?php include 'assets/footer.php'; ?>
</body>

</html>