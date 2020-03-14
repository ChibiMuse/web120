<?php include "includes/header.php";?>
<section class="column1">
    <h2> Overview: Let's Get SASSy</h2>

    <h3>SASS, Less, and other CSS Preprocessors, what are they? Do we need them? Let’s find out!</h3>

<p>I discovered SASS by accident when trying to explore code for a cool navigation bar on CodePen.io. The “CSS” they provided wasn’t seeming to work in my browser and I couldn’t figure out why until I did a little more research into that .scss file title.</p>

<p>Sass is a CSS preprocessors, or a script that adds extra functionality to writing CSS to help make CSS projects be more DRY and manageable. The idea is, you write out your code using your preprocessing language, run it through a compiler, and then you can upload the resulting CSS code to where you need it.</p>

<h3>Do you need it?</h3>

<p>This is a big “it depends”. I found a lot of opinions on CSS preprocessors. In the end, they currently add a lot of functionality to your CSS such as the ability to change one variable value and have that effect all uses of that variable not needing to do a giant find and replace for each one. However, CSS has recently added variables and may continue to add additional functions to render CSS Preprocessors redundant. For now, you may find playing around with preprocessors to be enjoyable and take out some of the redundancy in writing pure CSS.</p>

<h3>What CSS Preprocessor should I use?</h3>

<p>This is completely up to you. Seriously. Try one out and see how you like it. Everyone seems to have an opinion and from the research I’ve done, that opinion seems to mainly be on what they’ve used the most or what their team used. Popularity is a toss-up at the moment. If you start looking through my sources you will see that Less and Sass seem to float back and forth between people claiming one is more popular than the other.</p>

<p>When trying to decide what to use for myself, I found myself confused on what the differences are and now I want to try to dispel some of that murki-ness for others that might be in a similar state of conflicting-information-overload.</p>

    <h3>SASS:</h3>h3>
<p>Sass gets confusing. I asked about sass and responses and results were often like “You mean SCSS?” or “Sassy CSS”. Sassy CSS? Scss? What?</p>
<p>Sass is the preprocessing script. It is written using Ruby on Rails (you do not need to know any Ruby to start learning Sass) and the confusion starts usually because it has two different syntax types you can use with it. </p>
<p>First (and oldest) is Sass (style.sass). Sass files use line breaks and indentation for meaning and separation rather than brackets and semicolons.</p>
<p>Second is Sassy CSS (style.scss). SCSS files use the same syntax as CSS with brackets and semicolons. As such, every CSS file is a valid SCSS file and can be run through the compiler without problem.</p>

<h3>LESS:</h3>
<p>Like Sass, Less is the pre-processing script. It is written using Javascript (you do not need to know any Javascript to learn Less). This is where I started to see recommendations that you should use Less since it can be run client-side in the browser. 1) Think carefully before doing this as this will affect browser performance. If you aren’t doing dynamic styling, you should just run your code through a compiler and then upload it anyways, and dynamic styling should probably be done server-side anyways. HOWEVER, the client-side aspect could be useful for testing if you really find running your code through a compiler too much effort.</p>

<p>In the end, even if you have a small project, it might be worth it to pick-up a CSS Preprocessor and play around with it and see what you think. Try different ones or look through the documentation and see which one might appeal most to you. There really doesn’t seem to be a right answer. Maybe you just want to play with CSS variables for now. You do you.</p>

<p>Hopefully this guide helps clear up a bit about CSS Preprocessors and give you some good starting points in your own learning and research. As always, feedback is always welcome; feedback is how I can make sure my information is accurate and up to date and how more helpful resources can be added. Thank you!</p>

<p><i>Note: A CSS Preprocessor can help keep code more organized and DRY but it definitely doesn’t take the place of CSS best practices. I’ve included a resource that lays out how you can write better CSS code and the same guidelines can apply whether you write with vanilla CSS or using a CSS Preprocessing script.</i><a href="https://scalablecss.com/stop-writing-messy-css/">How to Stop Writing Messy &amp; Unscalable CSS</a></p>

</section>
<section class="column2">
    <h3> Sources</h3>
    <div class="resources">
        <ul class="sources">
            <li>Catlin, Hampton, et al. “Implementation Guide.” Sass, 2020, <a href="sass-lang.com/implementation.">sass-lang.com</a></li>
            <br>
            <li>Coyier, Chris. “Poll Results: Popularity of CSS Preprocessors: CSS-Tricks.” CSS, 4 Mar. 2016,<a href="css-tricks.com/poll-results-popularity-of-css-preprocessors/">www.css-tricks.com (CSS Preprocess Popularity)</a></li>
            <br>
            <li>Coyier, Chris. “Sass vs. Less: CSS-Tricks.” CSS, 10 Jan. 2020,<a href="css-tricks.com/sass-vs-less/">css-tricks.com (SASS vs LESS)/</a></li>
            <li>“CSS Preprocessor.” MDN Web Docs, Mozilla, 2020, <a href="developer.mozilla.org/en-US/docs/Glossary/CSS_preprocessor">developer.mozilla.org (CSS Preprocessor)</a></li>
            <br>
            <li>Hixon, Jeremy. “An Introduction To LESS, And LESS Vs Sass.” Smashing Magazine, 9 Sept. 2011,<a href="www.smashingmagazine.com/2011/09/an-introduction-to-less-and-comparison-to-sass/">smashingmagazine.com</a></li>
            <br>
            <li>Igho, Omoike Sarah. “Introduction to Sass/SCSS and Less:” Medium, Medium, 4 Sept. 2018, <a href="medium.com/@awesome_sayrah/introduction-to-sass-scss-and-less-7ff7e494e798">medium.com</a></li>
            <br>
            <li>Kryukov, Dennis. “Sass vs. Less: Which CSS Preprocessor to Choose in 2019?” Soshace, 2 July 2019,<a href="blog.soshace.com/sass-vs-less-which-css-preprocessor-to-choose-in-2019/">blog.soshace.com</a></li>
            <li>KV30. “What Is the Difference between SCSS and SASS ?” GeeksforGeeks, 28 Nov. 2019,<a href="www.geeksforgeeks.org/what-is-the-difference-between-scss-and-sass/">www.geeksforgeeks.org</a></li>
            <br>
            <li>MDN Contributors. “Using CSS Custom Properties (Variables).” MDN Web Docs, 29 Feb. 2020, <a href="developer.mozilla.org/en-US/docs/Web/CSS/Using_CSS_custom_properties">developer.mozilla.org (CSS Custom Properties)</a></li>
            <br>
            <li>Nayonika. “CSS Preprocessor: SASS.” GeeksforGeeks, 28 Jan. 2019,<a href="www.geeksforgeeks.org/css-preprocessor-sass/">www.geeksforgeeks.org</a></li>
            <li>Team, The Core Less. “Overview.” Getting Started | Less.js, 2020,<a href="lesscss.org">lesscss.org</a></li>
            <br>
            <li>Treutler, Amanda. “A Beginner's Guide to Sass.” Medium, Level Up Coding, 7 Dec. 2019,<a href="levelup.gitconnected.com/a-beginners-guide-to-sass-cb53596777dd">levelup.gitconnected.com</a></li>
            <br>
            <li>Truong, Christina. “Getting Started with CSS Preprocessors (Less and Sass).” Adobe Blog, Adobe, 25 Feb. 2015,<a href="theblog.adobe.com/getting-started-with-css-preprocessors-less-and-sass/">theblog.adobe.com</a></li>
            <br>
            <li>“Using CSS Preprocessors.” CodePen Blog, 2020, <a href="blog.codepen.io/documentation/editor/using-css-preprocessors/">blog.codepen.io</a></li>
        </ul>
    </div>
</section>
<?php include "includes/footer.php";?>