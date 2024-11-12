@extends('website.master')
@section('body')
    <div class="container">
        <!-- Featured Article -->
        <section class="hero-feature">
            <h2>Featured Story: The Future of Technology in 2025</h2>
            <p class="meta">Published on November 1, 2024 | By John Doe</p>
            <p class="summary">An exclusive look at how technology is shaping our future, from AI advancements to sustainable energy solutions. Explore what the next decade has in store.</p>
            <a href="#" class="read-more">Read Full Story</a>
        </section>

        <!-- Feature Articles Grid -->
        <section class="feature-grid">
            <article class="feature">
                <img src="{{asset('')}}admin-assets/image/Technical-Innovation.png" alt="Tech Innovations" height="600px">
                <h3>Tech Innovations to Watch</h3>
                <p class="meta">Published on October 28, 2024</p>
                <p>Discover the groundbreaking technologies that are set to change the way we live and work.</p>
                <a href="#" class="read-more">Read More</a>
            </article>

            <article class="feature">
                <img src="{{asset('')}}admin-assets/image/climate.jpg" alt="Climate Change" height="550px">
                <h3>Climate Change: Global Impact</h3>
                <p class="meta">Published on October 25, 2024</p>
                <p>An in-depth report on the ongoing climate crisis and the efforts to mitigate its effects.</p>
                <a href="#" class="read-more">Read More</a>
            </article>

            <article class="feature">
                <img src="{{asset('')}}admin-assets/image/Economics%20and%20Finance.jpg" alt="Economy and Finance" height="550px">
                <h3>Global Economy: Challenges Ahead</h3>
                <p class="meta">Published on October 22, 2024</p>
                <p>Analysis of economic trends and what to expect in the coming year for global markets.</p>
                <a href="#" class="read-more">Read More</a>
            </article>

            <article class="feature">
                <img src="{{asset('')}}admin-assets/image/health.jpg" alt="Health and Wellness" height="550px">
                <h3>Health & Wellness in 2024</h3>
                <p class="meta">Published on October 20, 2024</p>
                <p>Explore the latest trends in health and wellness, from mental health to nutrition.</p>
                <a href="#" class="read-more">Read More</a>
            </article>
        </section>
    </div>
@endsection
