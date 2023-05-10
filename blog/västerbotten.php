<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-head.php';
    ?>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'blog-desc.php';
    ?>
    <meta
      name="keywords"
      content="adamsochorec, adam sochorec, @adamsochorec,"
    />
    <title>Västerbotten | Adam Sochorec</title>
    <!-- Leaflet script start -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
      integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI="
      crossorigin=""
    />
    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script
      src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
      integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM="
      crossorigin=""
    ></script>
    <!-- Leaflet script end -->
  </head>
  <body id="västerbotten" class="blog-item">
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-nav-bar.php';
    ?>
    <main>
      <article class="wrapper-standard">
        <div class="pathname-container">
          <i
            ><span class="pathname"><a href="/"></a> / </span>
            <span class="pathname"><a href="/#blog"></a> / </span>
            <span class="pathname-current"></span
          ></i>
        </div>
        <br />
        <h1></h1>
        <br />
        <p class="pathname">
          <svg
            id="date"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 448 512"
          >
            <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
            <path
              d="M128 0c17.7 0 32 14.3 32 32V64H288V32c0-17.7 14.3-32 32-32s32 14.3 32 32V64h48c26.5 0 48 21.5 48 48v48H0V112C0 85.5 21.5 64 48 64H96V32c0-17.7 14.3-32 32-32zM0 192H448V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V192zm64 80v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm128 0v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H208c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H336zM64 400v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H208zm112 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H336c-8.8 0-16 7.2-16 16z"
            />
          </svg>
          September 2022
        </p>
        <div class="img">
          <img
            src="/img/2209048838.jpg"
            alt="Panorama shot of an mire, where we bushcrafted. Heap and weed around the lake is mustard yellow, surrounded by a wall of a forest trees."
          />
        </div>
        <p class="dropcap">
          As the autumn days began, I had the opportunity to visit the
          Västerbotten province in Sweden during my exchange program at
          <a
            target="_blank"
            rel="noopener noreferrer"
            href="https://www.uwasa.fi/fi"
            >Vaasan Ylipsto</a
          >. My Swedish classmate, Andreas, invited me to stay with his friend
          in the province, which is located on the east side of Sweden.
          Westrobothnia, or
          <a
            href="https://en.wikipedia.org/wiki/Västerbotten"
            target="_blank"
            rel="noopener noreferrer"
            >Västerbotten</a
          >
          in Swedish, is one of the 21 counties in Sweden and its administrative
          center is located in Umeå. The Finnish city of Vaasa, where my
          university is located, and Umeå, are connected by a 4-hour ferry ride
          across the narrowest part of the Bothnian Bay.<br /><br />
          As it was my first time in Sweden, I had high expectations for the
          countryside and the way Swedes handle
          <a
            target="_blank"
            rel="noopener noreferrer"
            href="https://en.wikipedia.org/wiki/Freedom_to_roam#Sweden"
            >Everyman's right</a
          >. These were the focus of our trip for the next four days.
        </p>
        <div id="map" style="border-radius: 6px">
          <p class="alt-alt">
            Satellite view of an central part of the Scandinavia.
          </p>
        </div>

        <p>
          We arrived in Umeå on September 1st and were greeted warmly by our
          hosts. After a Czech-Swedish introduction and some trouble finding our
          car at the dock, we began our drive to the small inland village of
          Bullmark. On the way out of the city, we passed a sawmill complex,
          which was accompanied by the pleasant smell of processed wood. If
          someone were to tell me afterwards that you can't smell a picture, I
          would disagree.<br />
          In the evening, we settled down and had dinner at Joakim's apartment,
          which was located next to the forest. The apartment was best described
          as a shipping container with a classical Nordic facade made out of red
          <a
            href="https://falurodfarg.com/en/about-us/"
            target="_blank"
            rel="noopener noreferrer"
            >falu rödfärg</a
          >
          planks and white outlines around windows and edges. Our host, Joakim,
          belonged to the
          <a
            target="_blank"
            rel="noopener noreferrer"
            href="https://en.wikipedia.org/wiki/Sámi"
            >Sámi</a
          >
          family, the native inhabitants of Scandinavia who still live in the
          forests of
          <a
            target="_blank"
            rel="noopener noreferrer"
            href="https://en.wikipedia.org/wiki/Lapland_(Sweden)"
            >Lapland</a
          >
          and primarily herd
          <a
            target="_blank"
            rel="noopener noreferrer"
            href="https://en.wikipedia.org/wiki/Reindeer"
            >reindeer</a
          >. His apartment was full of family heritage, including historical
          furniture, reindeer trophies, and traditional hand-crafted knives of
          various sizes.
        </p>
        <div class="img">
          <img
            src="/img/2209012611001.jpg"
            alt="View from the ship to the ship docks in Umeå, there is a coast guard boat in foreground, in background are two wind turbines."
          />
          <br /><br class="hide" />
          <p><i class="note">Ship docks in Umeå</i></p>
        </div>
        <p>
          Later that night, we decided to sleep in the surrounding forest. The
          essence of the Everyman's right is that one can sleep, pick berries
          and mushrooms, and set a campfire almost anywhere, with the exception
          of private properties and national parks. This right to roam exists in
          several other countries besides Finland and Sweden. We set up camp
          under the bare sky in a
          <a
            target="_blank"
            rel="noopener noreferrer"
            href="https://gobagguide.com/bivy-bag/"
            >bivak bag</a
          >
          and Andreas and Joakim under a stretched tarp among the trees.<br />
          Surrounded by berries and young pine forest, the trees were planted so
          regularly that you could see a solid distance in any direction, which
          made me think that something wasn't quite right about it. I thought
          about this while being bored during an online lecture the following
          morning.<br />
          After my programming lecture ended, the boys were already preparing a
          light breakfast of porridge and tea. We also made sure to properly
          extinguish the campfire and headed out to find nearby spiritual stone
          formations from ancient times.<br />
          After an hour of searching, we realized that the stones were not in
          the location we thought they were, so we headed back home with a few
          chanterelle mushrooms we had found in our pockets.<br /><br />
          In addition to bush crafting, we also attended a free induction
          lecture on
          <a
            target="_blank"
            rel="noopener noreferrer"
            href="https://en.wikipedia.org/wiki/Brazilian_jiu-jitsu"
            >Brazilian jiu-jitsu</a
          >
          at a
          <a
            target="_blank"
            rel="noopener noreferrer"
            href="http://www.umeakampcenter.se"
            >Umeå Kampcenter</a
          >
          later that day. The 90-minute lecture was our first introduction to
          the
          <i
            >self-defence martial art and combat sport that is based on
            grappling, ground fighting (ne-waza), and submission holds. BJJ
            focuses on taking an opponent to the ground, controlling them,
            gaining a dominant position, and using various techniques to force
            them into submission through joint locks or choke holds.
            <br />-Wikipedia</i
          >
        </p>
        <div class="img">
          <img src="/img/22090226268821.jpg" alt="" />
          <br /><br class="hide" />
          <p>
            <i class="note"
              >"Surrounded by berries and young pine forest, the trees were
              planted so regularly that you could see a solid distance in any
              direction..."</i
            >
          </p>
        </div>
        <p>
          The martial arts lecture sparked our interest in continuing to test
          our strengths even after returning to Bullmark. Joakim had two pairs
          of hand-guards for sparring from his
          <a
            target="_blank"
            rel="noopener noreferrer"
            href="https://en.wikipedia.org/wiki/Mixed_martial_arts"
            >MMA</a
          >
          period, so we conducted a modest sparring session on a rocky parking
          lot behind his house. <br />During the session, we shared our various
          combat experiences from boxing, MMA, to
          <a
            href="https://en.wikipedia.org/wiki/Taekwondo"
            target="_blank"
            rel="noopener noreferrer"
            >Taekwondo</a
          ><br /><br />
          The following morning was dedicated to fishing and searching for
          <a
            target="_blank"
            rel="noopener noreferrer"
            href="https://en.wikipedia.org/wiki/Psilocybe_semilanceata"
            >liberty caps</a
          >
          mushrooms around the nearby river. However, we were not successful in
          either activity, catching no fish and only finding three mushrooms.
          Despite our unsuccessful morning hunt, we had an exciting plan for the
          rest of the day: proper
          <a href="https://en.wikipedia.org/wiki/Bushcraft">bushcraft</a>. We
          headed to a countryside location a dozen kilometres south of Bullmark.
          As we drove deeper into the forest, we encountered a hunter's watch
          that was keeping an eye on the group's belongings, mainly consisting
          of several large pickups parked by the road. This meant we would be
          sharing the woods with hunters during hunting season, and according to
          my friends, they don't usually respect others' right to wander in the
          landscape during this time.
        </p>
        <div class="img">
          <img
            src="/img/2209032665002.jpg"
            alt="Panorama photo of our camp-site on the shore of a mire"
          />
          <br /><br class="hide" />
          <p><i class="note">Our mire-camp site</i></p>
        </div>
        <p>
          When we reached the end of the dirt road, we took our gear and Emil's
          husky, Barnabas and walked through the mixed woods. As soon as we
          passed through the wall of trees, we could see the subject of our
          interest: a mire lake that was semi-cut throughout by a heap of
          tentacles, which was solid enough to walk on. We followed the
          tentacle-shaped ground to its tip, where we decided to set up camp.
          <br />The boys set up a tarp 45 degrees over a rope between the pines
          to create a single-sided shelter. Emil decided to sleep in a hammock.
          The first thing we did upon arriving at the campsite was to set up a
          reflective west on a tall pine tree around our campsite - so the
          hunters could see our position.
        </p>
        <br class="hide" />
        <div class="img">
          <img
            src="/img/IMG00119.jpg"
            alt="Ilustration ilustrating various simple field shelters made with a rope and tarp."
          />
          <br /><br class="hide" /><br class="hide" />
          <p>
            <i class="note"
              >Various simple field shelters made with a rope and tarp by
              <a
                href="https://www.globalsecurity.org/military/library/policy/army/fm/5-103/CH5.HTM"
                >https://www.globalsecurity.org</a
              ></i
            >
          </p>
        </div>
        <p>
          Right after setting up camp, light rain began and we had a chance to
          test our shelter. As I sat under the tarp, I observed how the sunny
          day transformed into a cloudy rainstorm, then into a sunny afternoon
          followed by a wall of fog that evaporated from the bog, and was later
          cut through by sunset rays. I felt the immediate power of nature
          around me and realized that going into the forest and doing primitive
          but fulfilling activities, that mankind has been doing for most of its
          existence, helped me understand the complex matrix of the contemporary
          world in which I often feel confused by numerous procedures or
          cultural habits that are not always clear. It felt like going back in
          time through the history of mankind and at the same time looking at
          the present world. On top of this realization was the thought that
          nature will always do whatever it wants to, without needing any
          permission or consideration from our civilization. The fog evaporates
          from this or any mire every time it rains, and it has been doing so
          for billions of years and will continue to do so whether there are
          dinosaurs or dressed primates on the planet. And I was able to see
          that. Something so harmless as a fog after the rain, but still so
          powerful and never-ending.
        </p>
        <div class="img">
          <img
            src="/img/2209048834.jpg"
            alt="Portrait of a Joakim sitting on a tarp in the grass, hand on his hand-crafted machete, raindeer's fur around the shoulder. The mire is in the background."
          />
          <br /><br class="hide" />
          <p><i class="note">Joakim</i></p>
        </div>
        <p>
          As the sunset, I went for a walk around the heap of ground where we
          camped, when echoes of hunter's rifle blasts got more intense and less
          distant. My bare feet splashed in the soft moss and heap covering the
          lake in the centre of the bog. Soon the sky turned into a blood red
          dawn, reminiscent of the beginning of the movie
          <a
            href="https://www.youtube.com/watch?v=LoebZZ8K5N0"
            target="_blank"
            rel="noopener noreferrer"
            >The Revenant</a
          >
          Alone in the cold forest, chased by approaching blasts. As I looked
          around, the surrounding colors reminded me of how insane this planet
          is. The night was spent discussing around the fire. Most of the
          conversations were held in Swedish, which I understand to some extent
          because of its
          <a
            target="_blank"
            rel="noopener noreferrer"
            href="https://www.youtube.com/watch?v=Xz7olJwqyGk"
            >similarity to Danish</a
          >, which I study. So most of the time, I was observing, listening, and
          trying to decipher the ongoing conversation.<br />
          A highlight of the night was the shallow but still green
          <a
            target="_blank"
            rel="noopener noreferrer"
            href="https://en.wikipedia.org/wiki/Aurora"
            >Aurora</a
          >
          that occurred in the clear sky for a few minutes. It was a signal from
          God, a reminder that he is always up there, no matter what. Watching
          my steps, watching out for me, despite my actions and location.
        </p>
        <div class="img">
          <img
            src="/img/2209018820.jpg"
            alt="Photo of a collection of several sizes of original Sámi knives hand crafted by Joakim, each made for a specific actitivty."
          />
          <br /><br class="hide" />
          <p>
            <i class="note"
              >Original Sámi knives hand crafted by Joakim, each of them has
              been made for a specific activity</i
            >
          </p>
        </div>
        <p>
          When we found our way through the vast forest to the cars the
          following morning, we drove to Joakim's place in Bullmark where we
          spent the rest of our last day relaxing and packing for the long
          journey back to Finland, which awaited us the next early morning.
        </p>
        <hr />
        <h2>Further reading</h2>
        <br />
        <div class="grid-container gallery">
          <a class="hh-stretch" href="/blog/blavand">
            <div class="grid-item" id="blavand">
              <span></span>
            </div>
          </a>
          <a href="/blog/house-hunting">
            <div class="grid-item" id="house-hunting">
              <span></span>
            </div>
          </a>

          <a href="/blog/aland">
            <div class="grid-item" id="aland">
              <span></span>
            </div>
          </a>
          <a href="/blog/vestkystruten">
            <div class="grid-item" id="vestkystruten">
              <span></span>
            </div>
          </a>
          <a class="hh-stretch" href="/blog/cybersecurity">
            <div class="grid-item" id="cybersecurity">
              <span></span>
            </div>
          </a>
        </div>
        <?php
          $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
          include $IPATH . 'global-totop.php';
          ?>
      </article>
    </main>
    <script type="text/javascript">
      const map = L.map("map");
      map.attributionControl.setPrefix("");
      L.tileLayer(
        "https://{s}.tile.thunderforest.com/outdoors/{z}/{x}/{y}{r}.png?apikey=7c352c8ff1244dd8b732e349e0b0fe8d",
        {
          attribution:
            'Maps &copy; <a href="https://www.thunderforest.com">Thunderforest</a>, Data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>',
          maxZoom: 22,
        }
      ).addTo(map);

      map.setView([63.825, 20.27965], 7);

      // marker
      L.marker([63.825, 20.27965]).addTo(map);
    </script>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-footer.php';
    ?>
  </body>
</html>
