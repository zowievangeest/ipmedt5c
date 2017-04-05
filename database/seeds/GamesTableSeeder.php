<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class GamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('games')->insert(
            [
                [
                    'name' => 'Project Cars',
                    'short_description' => 'Project CARS is a motorsport racing simulator video game developed by Slightly Mad Studios and published by Bandai Namco Entertainment.',
                    'description' => 'Project CARS is intended to represent a realistic driving simulation. In order to differentiate the game from the established industry leaders, Gran Turismo and Forza Motorsport, Slightly Mad Studios\' aim is a ""sandbox"" approach that allows the player to choose between a variety of different motorsports paths and grants immediate access to all included tracks and vehicles.[4] Project CARS portrays racing events spanning multiple days, progressing from shakedown and qualifying runs to the race itself, while changes in weather and lighting conditions are simulated dynamically. The game adopts an improved version of the Madness engine, which was the basis for the Need for Speed: Shift titles.[6] More processing power available in modern computers allows for the introduction of a dynamic tire model named ""SETA"", rather than the steady-state model based on lookup tables, as seen in previous generation simulations. To accommodate differing skill levels, Slightly Mad Studios offers gamers (with or without a digital wheel) various driver aids and input filtering methods. There are 74 drivable cars,[2] over 30 unique locations with at least 110 different courses, of which 23 are real, with the remainder being fictional. For licensing reasons, some tracks are currently codenamed using their geographic location. In addition to real world racing circuits and fictional kart circuits, there are two fictional point-to-point roads inspired by Côte d\'Azur and California Pacific Coast.',
                    'release_date' => Carbon::create(2015, 5, 8),
                    'image_url' => 'http://cdn2.pu.nl/media/games/project_cars/project_cars_r1.jpg',
                    'price' => 49.99,
                    'publisher_id' => 1,
                    'video_id' => 2,
                    'age_range_id' => 1
                ],
                [
                    'name' => 'Steep',
                    'short_description' => 'Steep is gebaseerd op 4 extreme wintersporten: Snowboarden, paragliding, skiën en wingsuit vliegen.',
                    'description' => 'Steep is spel waarbij extreme sporten kunnen worden beoefend. Het speelt zich af in de Alpen en is een open wereld spel. Hierbij heeft de speler de mogelijkheid om de wereld te ontdekken. Het spel kan worden gespeeld vanuit een derdepersoon- en eerstepersoonperspectief. De 4 activiteiten zijn skiën, wingsuit vliegen, snowboarden en paragliden.',
                    'release_date' => Carbon::create(2016, 12, 2),
                    'image_url' => 'http://www.undercover-network.net/wp-content/uploads/2016/12/multi_action_sports2.jpg',
                    'price' => 49.99,
                    'publisher_id' => 2,
                    'video_id' => 1,
                    'age_range_id' => 3
                ],
                [
                    'name' => 'FarCry Primal',
                    'short_description' => 'Far Cry Primal is een action-adventure-computerspel gemaakt door Ubisoft Montreal.',
                    'description' => 'Far Cry Primal is een action-adventure-computerspel gemaakt door Ubisoft Montreal. Het spel is op 23 februari 2016 door Ubisoft uitgegeven voor de PlayStation 4 en Xbox One. Een Windows-versie verscheen in de maand daarop. Het spel speelt zich 10.000 jaar v.Chr. af, tijdens de steentijd. De speler speelt als de jager Takkar, die gestrand is in een voorheen met ijs bedekte vallei genaamd Oros. De ontwikkeling van Far Cry Primal werd geleid door Ubisoft Montreal, met aanvullend werk geleverd door de dochterondernemingen van Ubisoft in Kiev, Shanghai en Toronto.',
                    'release_date' => Carbon::create(2016, 2, 23),
                    'image_url' => 'https://ubistatic19-a.akamaihd.net/ubicomstatic/en-US/global/media/Mammoth_Hunt_GOLD_1080p_221522.jpg',
                    'price' => 49.99,
                    'publisher_id' => 2,
                    'video_id' => 3,
                    'age_range_id' => 5
                ],
                [
                    'name' => 'Watch Dogs',
                    'short_description' => 'Watch Dogs is een open wereld-, action-adventure- en third-person shooter-spel ontwikkeld door Ubisoft Montreal',
                    'description' => 'Watch Dogs speelt zich af in de stad Chicago en draait om het hoofdpersonage Aiden Pearce, een briljante hacker die in zijn gewelddadige jeugd al riskante criminele activiteiten ondernam. Met zijn bijzondere mobiele telefoon kan hij alles wat te maken heeft met ctOS hacken. Dit gebruikt hij om aan de politie te ontkomen, of simpelweg om de beelden van beveiligingscameras te bekijken. Verder kan hij persoonlijke informatie van zijn doelwitten downloaden, om ze zo (gemakkelijker) te kunnen lokaliseren. Ook kan de speler bijvoorbeeld verkeerslichten hacken, om op deze manier een ongeluk als dekking te creëren. In het spel is het mogelijk om met een auto te rijden en met boten te varen, vliegende voertuigen zijn echter niet mogelijk. Ook een trein besturen is niet mogelijk, maar de speler kan de trein wel hacken.',
                    'release_date' => Carbon::create(2014, 5, 27),
                    'image_url' => 'https://s-media-cache-ak0.pinimg.com/originals/22/97/9c/22979c232a52dd5d26e822274211c32b.jpg',
                    'price' => 49.99,
                    'publisher_id' => 2,
                    'video_id' => 4,
                    'age_range_id' => 5
                ],
                [
                    'name' => 'Destiny',
                    'short_description' => 'Destiny is an online-only multiplayer first-person shooter video game developed by Bungie and published by Activision.',
                    'description' => 'Destiny is an online-only multiplayer first-person shooter video game developed by Bungie and published by Activision. It was released worldwide on September 9, 2014, for the PlayStation 3, PlayStation 4, Xbox 360, and Xbox One consoles. Destiny marked Bungies first new console franchise since the Halo series, and it is the first game in a ten-year agreement between Bungie and Activision. Set in a ""mythic science fiction"" world, the game features a multiplayer ""shared-world"" environment with elements of role-playing games. Activities in Destiny are divided among player versus environment (PvE) and player versus player (PvP) game types. In addition to normal story missions, PvE features three-player ""strikes"" and six-player raids. A free roam patrol mode is also available for each planet and features public events. PvP features objective-based modes, as well as traditional deathmatch game modes. Players take on the role of a Guardian, protectors of Earths last safe city as they wield a power called Light to protect the City from different alien races. Guardians are tasked with reviving a celestial being called the Traveler, while journeying to different planets to investigate and destroy the alien threats before humanity is completely wiped out. Bungie released four expansion packs, furthering the story, and adding new content, missions, and new PvP modes. Year One of Destiny featured two small expansions, The Dark Below in December 2014 and House of Wolves in May 2015. A third, larger expansion, The Taken King, was released in September 2015 and marked the beginning of Year Two, changing much of the core gameplay. In December 2015, Destiny shifted to an event-based model, featuring more limited-time events. A new, large expansion called Rise of Iron was released in September 2016, beginning Year Three. Rise of Iron was only released for the PlayStation 4 and Xbox One; PlayStation 3 and Xbox 360 clients subsequently stopped receiving updates. A full sequel, Destiny 2, is scheduled for September 2017. Upon its release, Destiny received mixed to positive reviews with criticism centered mostly around the games storyline and post-campaign content. The game was praised for maintaining lineage from the Halo franchise, particularly in regards to its competitive experiences. On day one of its release, it sold over US$500 million at retail, making it the biggest new franchise launch of all time. It was GamesRadars 2014 Game of the Year and it received the BAFTA Award for Best Game at the 2014 British Academy Video Games Awards.',
                    'release_date' => Carbon::create(2014, 9, 9),
                    'image_url' => 'https://inthegame.nl/wp-content/uploads/destiny-moon-battles-artwork-official.jpg',
                    'price' => 49.99,
                    'publisher_id' => 3,
                    'video_id' => 5,
                    'age_range_id' => 4
                ],
                [
                    'name' => 'Assassins Creed Syndicate',
                    'short_description' => 'Assassins Creed Syndicate is een action-adventurespel ontwikkeld door Ubisoft Quebec in samenwerking met acht andere Ubisoft-studios en uitgegeven door Ubisoft.',
                    'description' => 'Voor het eerst in de Assassins Creed-serie kan de speler vrij wisselen tussen twee verschillende hoofdpersonen, op een manier die te vergelijken is met Grand Theft Auto V. Het mannelijke hoofdpersonage Jacob Frye is een heethoofdige ruziezoeker, gespecialiseerd in gevechten op korte afstand, terwijl zijn tweelingzus Evie sterk is in stealth en afhankelijk is van haar intelligentie en verstand. De hoofdwapens van de Assassijnen zijn dit keer boksbeugels, een compacte revolver, een stokzwaard en het traditionele Nepalese gebogen kukri-mes. Gevechten gaan nu op een sneller tempo dan voorheen omdat de zogenoemde vertraging (latency) met de helft is teruggebracht en meerdere vijanden tegelijk de speler aanvallen. Verder maken nieuwe reissystemen hun debuut in het spel, zoals een touwpistool dat spelers de mogelijkheid biedt om van gebouwen te abseilen of een tokkelbaan te creëren tussen gebouwen, koetsen, die allemaal bemand kunnen worden of simpelweg in het bezit kunnen komen van de speler, en treinen. De daken van rijdende koetsen kunnen ook de setting zijn van een gevecht en achtervolgingen. Londen is in het spel ongeveer 30% groter dan Parijs in Unity en bestaat uit zes boroughs: Westminster, de Strand, de City of London, Whitechapel, Southwark en Lambeth. Om Ubisoft Québec de mogelijkheid te bieden zich te concentreren op het tot leven brengen van deze kaart, bevat het spel geen multiplayermodus.',
                    'release_date' => Carbon::create(2015, 10, 23),
                    'image_url' => 'http://assets1.ignimgs.com/2015/10/22/acs1020151280jpg-b6aa31_1280w.jpg',
                    'price' => 49.99,
                    'publisher_id' => 2,
                    'video_id' => 6,
                    'age_range_id' => 5
                ],
                [
                    'name' => 'Dirt Rally',
                    'short_description' => 'Dirt Rally is a racing video game focused on rallying. Players compete in timed stage events on tarmac and off-road terrain in varying weather conditions.',
                    'description' => 'Dirt Rally is a racing video game focused on rallying. Players compete in timed stage events on tarmac and off-road terrain in varying weather conditions. On release, the game featured 17 cars, 36 stages from three real world locations - Monte Carlo, Powys and Argolis - and asynchronous multiplayer.[3] Stages range from 4 to 16 km. Subsequent updates added three more locations in the form of Baumholder, Jämsä and Värmland, as well as rallycross and player versus player multiplayer modes. Codemasters announced a partnership with the FIA World Rallycross Championship in July 2015,[5] leading to the inclusion of the Lydden Hill Race Circuit (England), Lånkebanen (Norway), and Höljesbanan (Sweden) to the game. Dirt Rally features a large number of vehicles in a wide variety of classes, and 16 manufacturers. It contains cars from the 1960s, 70s, 80s, Group B, Group A, Group R, 2000s and 2010s modern rally, Rallycross and Pikes Peak, with cars having up to 10 liveries. The PS4 version of the game runs at 1080P at 60 fps, with the Xbox One version having dynamic resolution, reducing to 900P when there is more action on screen, whereas the PC version includes Steam Workshop that consists of preset setups made from each vehicles by users that helps benefit races from different terrains.',
                    'release_date' => Carbon::create(2015, 4, 5),
                    'image_url' => 'http://www.gamekings.tv/wp-content/uploads/nieuws20151207_dirtrally.jpg',
                    'price' => 49.99,
                    'publisher_id' => 4,
                    'video_id' => 7,
                    'age_range_id' => 1
                ],
                [
                    'name' => 'Battlefield 4',
                    'short_description' => 'Battlefield 4 is a first-person shooter video game developed by video game developer EA DICE',
                    'description' => 'The games heads-up display (HUD) is composed of two compact rectangles. The lower left-hand corner features a mini-map and compass for navigation, and a simplified objective notice above it; the lower right includes a compact ammo counter and health meter. The top right displays kill notifications of all players in-game. On the Windows version of the game, the top left features a chat window when in multiplayer. The mini-map, as well as the main game screen, shows symbols denoting three kinds of entities: blue for allies, green for squadmates, and orange for enemies, this applies to all interactivity on the battlefield. Battlefield 4 options also allow colour-blind players to change the on-screen colour indicators to: tritanomaly, deuteranomaly and protanomaly. Players can use dual-scoped weapons, including weapons with different firing modes (e.g. semi-automatic, automatic fire). They can ""spot"" targets (marking their positions to the players team) in the single-player campaign (a first in the Battlefield franchise) as well as in multiplayer. The games bullet-dropping-system has been significantly enhanced, allowing players to aim precisely with the environment. In addition, players have more combat capabilities, such as countering melee attacks from the front while standing or crouching, shooting with their sidearm while swimming, and diving underwater to avoid enemy detection.',
                    'release_date' => Carbon::create(2013, 10, 29),
                    'image_url' => 'https://psmedia.playstation.com/is/image/psmedia/BF4SCRN?$MediaCarousel_Original$',
                    'publisher_id' => 5,
                    'price' => 49.99,
                    'video_id' => 8,
                    'age_range_id' => 5
                ],

            ]
        );
    }
}
