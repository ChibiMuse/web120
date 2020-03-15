<?php include "includes/header.php";?>
<section class="column1">
    <h2> No One Left Behind</h2>
    <p><i>"If RD is about designing for the most efficient, pleasurable user experience, accessibility becomes designing for inclusion - leaving no user behind, regardless of the type of device they may be using. It stands to reason that if you acknowledge these are two different-but-related concepts and if you give both equal weight when making design choices, you can bring the best possible user experience equally to everyone.”</i></p>
        <p><a class="main-para" href="https://www.boia.org/blog/responsive-design-and-accessibility">Bureau of Internet Accessibility on Responsive Design and Accesibility</a></p>
    <h2>Overview</h2>
    <p> Most people can agree that responsive design is very important; how people access content is ever changing and variable and without good responsive design sites risk alienating valuable user bases. Lack of accessibility can hurt well designed websites just as a lack of responsive design can, and it doesn’t have to. Accessibility and responsive design go hand in hand. I have pulled together some resources that should give every web designer a solid understanding of:
</p>
    <ol class="research">
        <li>The difference between accessible and responsive design.</li>
        <li>Why accessibily and responsiveness is important.</li>
        <li>Basic principles and source to help put this new knowledge to use.</li>
    </ol>
    <p>Just because a website is responsive, does not make it accessible and vice versa. Accessibility is keeping in mind how users interact with your website and not having the access limited by poor design choices. This can be anything from a clean and well labeled html layout for easy screen-reader access to choosing colorblind-friendly color palettes.</p>
    <p>To best achieve both accessible and responsive design, these thoughts should be on your mind from the very beginning of the design process. User stories should reflect not only different technologies and access but limitations or abilities as well. It is easier to build clean concepts and designs in the beginning than try to implement poor design now and sort the knots later.</p>
    <p>An example of responsive but inaccessible design: The nav for this section of the website. I used the checkbox “hack” to make a responsive navigation menu. To anyone not in the source code, it looks and behaves like any other responsive nav. However, the unconventional use and placement of a checkbox can confuse or even throw off some screen readers and isn’t supported in older browsers. For the purposes of a budding web developer, using this hack was a fun little challenge for a responsive nav and I learned a lot in the process. However, serious consideration should be given to any unconventional or “hack” type implementations as they could harm accessibility; it really isn’t a worthwhile trade either as there are better tools designed specifically for the jobs that many hacks try to accomplish.
</p>
    <p>With this in mind, some basic advice for effectively incorporating accessible and responsive design without excess frustration:
</p>
    <ul class="research">
        <li><em>Start your design with mobile and then scale up</em>. It is often easier to take a simple mobile design with all the core elements and scale it up to a more complicated design than it is to take a complicated large design and try to distill it into a mobile version.</li>
        <br>
        <li><em>Be thinking about accessibility and responsiveness in the very beginning.</em> Write those user stories. Ask for critique or experience from the target user base or those with experience. It really is easier to make thoughtful decisions in the beginning than to try to retroactively for poor design choices to be accessible and/or responsive.</li>
        <br>
        <li><em>Use your resources!</em> I’ve provided some, but there are so many others. Tools that will check your website for responsiveness or accessibility. Websites to help pick that perfect color pallette and check for color variance with different color blind modes (for this site is used <a class="main-para" href=”https://coolors.co/”>coolors.co</a>). You are not in this alone and many people have been working hard to define standards and provide support for web developers for many  years.</li>
    
    <p>Hopefully this helped clarify the importance of these concepts and gave you some solid resources for your own web design practice. If you have any other resources you have found helpful, feel free to share them. There's always more to learn and I'd be happy to update this site with better information for others as well. Thank you!</p>
    </ul>
</section>
<section class="column2">
    <div class="picture">
        <h2 class="source-logo"><i class="fas fa-universal-access"></i></h2>
    </div>
    <h3> Sources</h3>
    <div class="resources">
        <ul class="sources">
            <li>Admin. “Responsive Design and Accessibility.” Bureau of Internet Accessibility, 27 Jan. 2017, 11:37:10 EST, <a href="www.boia.org/blog/responsive-design-and-accessibility">www.boia.org</a></li>
            <br>
            <li>Avila, Jonathan. “What Does Responsive Web Design Have to Do with Accessibility?” Level Access, 11 July 2013,<a href="www.levelaccess.com/what-does-responsive-web-design-have-to-do-with-accessibility/">www.levelaccess.com</a></li>
            <br>
            <li>Rocheleau, Jake. “Ultimate Guide To Accessible Responsive Web Design.” Vandelay Design, Design Psychology, 16 Aug. 2016, <a href="www.vandelaydesign.com/accessible-responsive-web-design">www.vandelaydesign.com</a></li>
            <li>Six, Janet M, et al. “Responsive Web Design and Accessibility.” UXmatters, 22 Apr. 2013,<a href="https://www.uxmatters.com/mt/archives/2013/04/responsive-web-design-and-accessibility.php">www.uxmatters.com</a></li>
            <br>
            <li>Utah State University Center for Persons with Disabilities. "Web Content Accessibility Guidelines." WebAIM:Web Accessibility In Mind, Aug 28. 2013,<a href="https://webaim.org/standards/wcag/">webaim.org</a></li>
            <br>
            <li>U.S. General Services Administration. “IT Accessibility Laws and Policies.” IT Accessibility Laws and Policies | Section508.Gov, Nov. 2018, <a href="www.section508.gov/manage/laws-and-policies.">www.section508.gov</a></li>
            <br>
            <li>w3c_wai. “Tips for Getting Started Developing for Web Accessibility.” Web Accessibility Initiative (WAI), 6 Dec. 2019, <a href="www.w3.org/WAI/tips/developing/">www.w3.org/WAI</a></li>
        </ul>
    </div>

</section>
<?php include "includes/footer.php";?>