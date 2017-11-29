<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
        	'title' => 'Harry Potter and the Sorcerer\'s Stone',
        	'author' => 'J.K. Rowling',
        	'published' => '1997',
        	'pages' => '309',
            'summary' => 'Harry Potter thinks he is an ordinary boy – until he is rescued by an owl, taken to Hogwarts School of Witchcraft and Wizardry, learns to play Quidditch and does battle in a deadly duel. The Reason: HARRY POTTER IS A WIZARD!',
            'img_url' => 'https://images-na.ssl-images-amazon.com/images/I/51DF6ZR8G7L._SX329_BO1,204,203,200_.jpg',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

         DB::table('books')->insert([
        	'title' => 'Harry Potter and the Chamber of Secrets',
        	'author' => 'J.K. Rowling',
        	'published' => '1998',
        	'pages' => '341',
            'summary' => 'Harry Potter is a wizard. He is in his second year at Hogwarts School of Witchcraft and Wizardry. Little does he know that this year will be just as eventful as the last...',
            'img_url' => 'https://images-na.ssl-images-amazon.com/images/I/51jNORv6nQL._SX340_BO1,204,203,200_.jpg',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('books')->insert([
        	'title' => 'Harry Potter and the Prisoner of Azkaban',
        	'author' => 'J.K. Rowling',
        	'published' => '1999',
            'summary' => 'For twelve long years, the dread fortress of Azkaban held an infamous prisoner named Sirius Black. Convicted of killing thirteen people with a single curse, he was said to be the heir apparent to the Dark Lord, Voldemort.

                Now he has escaped, leaving only two clues as to where he might be headed: Harry Potter\'s defeat of You-Know-Who was Black\'s downfall as well. And the Azkban guards heard Black muttering in his sleep, "He\'s at Hogwarts...he\'s at Hogwarts."

                Harry Potter isn\'t safe, not even within the walls of his magical school, surrounded by his friends. Because on top of it all, there may well be a traitor in their midst.',
        	'pages' => '435',
            'img_url' => 'https://images-na.ssl-images-amazon.com/images/I/51gY5jzz3NL._SX340_BO1,204,203,200_.jpg',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('books')->insert([
        	'title' => 'Harry Potter and the Goblet of Fire',
        	'author' => 'J.K. Rowling',
        	'published' => '2000',
        	'pages' => '734',
            'summary' => 'Harry Potter is midway through his training as a wizard and his coming of age. Harry wants to get away from the pernicious Dursleys and go to the International Quidditch Cup. He wants to find out about the mysterious event that\'s supposed to take place at Hogwarts this year, an event involving two other rival schools of magic, and a competition that hasn\'t happened for a hundred years. He wants to be a normal, fourteen-year-old wizard. But unfortunately for Harry Potter, he\'s not normal - even by wizarding standards. And in his case, different can be deadly.',
            'img_url' => 'https://images-na.ssl-images-amazon.com/images/I/51gy%2Bg8Z%2B1L._SX343_BO1,204,203,200_.jpg',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('books')->insert([
        	'title' => 'Harry Potter and the Order of the Phoenix',
        	'author' => 'J.K. Rowling',
        	'published' => '2003',
        	'pages' => '870',
            'summary' => 'In his fifth year at Hogwart\'s, Harry faces challenges at every turn, from the dark threat of He-Who-Must-Not-Be-Named and the unreliability of the government of the magical world to the rise of Ron Weasley as the keeper of the Gryffindor Quidditch Team. Along the way he learns about the strength of his friends, the fierceness of his enemies, and the meaning of sacrifice.',
            'img_url' => 'https://images-na.ssl-images-amazon.com/images/I/51Nex9f38rL._SX322_BO1,204,203,200_.jpg',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('books')->insert([
        	'title' => 'Harry Potter and the Half-Blood Prince',
        	'author' => 'J.K. Rowling',
        	'published' => '2005',
        	'pages' => '652',
            'summary' => 'The war against Voldemort is not going well; even the Muggles have been affected. Dumbledore is absent from Hogwarts for long stretches of time, and the Order of the Phoenix has already suffered losses. 

And yet . . . as with all wars, life goes on. Sixth-year students learn to Apparate. Teenagers flirt and fight and fall in love. Harry receives some extraordinary help in Potions from the mysterious Half-Blood Prince. And with Dumbledore\'s guidance, he seeks out the full, complex story of the boy who became Lord Voldemort -- and thus finds what may be his only vulnerability.',
            'img_url' => 'https://images-na.ssl-images-amazon.com/images/I/51NbOxBO%2BBL._SX346_BO1,204,203,200_.jpg',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('books')->insert([
        	'title' => 'Harry Potter and the Deathly Hallows',
        	'author' => 'J.K. Rowling',
        	'published' => '2007',
        	'pages' => '759',
            'summary' => 'The last installment in the Harry Potter series. Harry, Ron and Hermione must complete a mission given to them by Dumbledore to defeat Lord Voldermort at the final battle for Hogwarts. The Trio face many hardships along the way including abandonment by one of its key members. The book also sees the return of the Order as well as Dumbledores army. Also, the emergence as a formely bubling character into his true heroic self.',
            'img_url' => 'https://images-na.ssl-images-amazon.com/images/I/51E7NvVLO9L._SX346_BO1,204,203,200_.jpg',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('books')->insert([
        	'title' => 'A Game of Thrones',
        	'author' => 'George R.R. Martin',
        	'published' => '1996',
        	'pages' => '694',
            'summary' => 'Long ago, in a time forgotten, a preternatural event threw the seasons out of balance. In a land where summers can last decades and winters a lifetime, trouble is brewing. The cold is returning, and in the frozen wastes to the north of Winterfell, sinister forces are massing beyond the kingdom’s protective Wall. To the south, the king’s powers are failing—his most trusted adviser dead under mysterious circumstances and his enemies emerging from the shadows of the throne. At the center of the conflict lie the Starks of Winterfell, a family as harsh and unyielding as the frozen land they were born to. Now Lord Eddard Stark is reluctantly summoned to serve as the king’s new Hand, an appointment that threatens to sunder not only his family but the kingdom itself.

Sweeping from a harsh land of cold to a summertime kingdom of epicurean plenty, A Game of Thrones tells a tale of lords and ladies, soldiers and sorcerers, assassins and bastards, who come together in a time of grim omens. Here an enigmatic band of warriors bear swords of no human metal; a tribe of fierce wildlings carry men off into madness; a cruel young dragon prince barters his sister to win back his throne; a child is lost in the twilight between life and death; and a determined woman undertakes a treacherous journey to protect all she holds dear. Amid plots and counter-plots, tragedy and betrayal, victory and terror, allies and enemies, the fate of the Starks hangs perilously in the balance, as each side endeavors to win that deadliest of conflicts: the game of thrones.

Unparalleled in scope and execution, A Game of Thrones is one of those rare reading experiences that catch you up from the opening pages, won’t let you go until the end, and leave you yearning for more.

From a master of contemporary fantasy comes the first novel of a landmark series unlike any you’ve ever read before. With A Game of Thrones, George R. R. Martin has launched a genuine masterpiece, bringing together the best the genre has to offer. Mystery, intrigue, romance, and adventure fill the pages of this magnificent saga, the first volume in an epic series sure to delight fantasy fans everywhere.',
            'img_url' => 'https://images-na.ssl-images-amazon.com/images/I/51WT4gebGdL._SX332_BO1,204,203,200_.jpg',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('books')->insert([
        	'title' => 'A Clash of Kings',
        	'author' => 'George R.R. Martin',
        	'published' => '1999',
        	'pages' => '768',
            'summary' => 'George R. R. Martin, a writer of unsurpassed vision, power, and imagination, has created a landmark of fantasy fiction. In his widely acclaimed A Game of Thrones, he introduced us to an extraordinary world of wonder, intrigue, and adventure. Now, in the eagerly awaited second volume in this epic saga, he once again proves himself a master myth-maker, setting a standard against which all other fantasy novels will be measured for years to come.

Time is out of joint. The summer of peace and plenty, ten years long, is drawing to a close, and the harsh, chill winter approaches like an angry beast. Two great leaders—Lord Eddard Stark and Robert Baratheon—who held sway over an age of enforced peace are dead . . . victims of royal treachery. Now, from the ancient citadel of Dragonstone to the forbidding shores of Winterfell, chaos reigns, as pretenders to the Iron Throne of the Seven Kingdoms prepare to stake their claims through tempest, turmoil, and war.

As a prophecy of doom cuts across the sky—a comet the color of blood and flame—six factions struggle for control of a divided land. Eddard’s son Robb has declared himself King in the North. In the south, Joffrey, the heir apparent, rules in name only, victim of the scheming courtiers who teem over King’s Landing. Robert’s two brothers each seek their own dominion, while a disfavored house turns once more to conquest. And a continent away, an exiled queen, the Mother of Dragons, risks everything to lead her precious brood across a hard hot desert to win back the crown that is rightfully hers.

A Clash of Kings transports us into a magnificent, forgotten land of revelry and revenge, wizardry and warfare. It is a tale in which maidens cavort with madmen, brother plots against brother, and the dead rise to walk in the night. Here a princess masquerades as an orphan boy; a knight of the mind prepares a poison for a treacherous sorceress; and wild men descend from the Mountains of the Moon to ravage the countryside.

Against a backdrop of incest and fratricide, alchemy and murder, the price of glory may be measured in blood. And the spoils of victory may just go to the men and women possessed of the coldest steel . . . and the coldest hearts. For when rulers clash, all of the land feels the tremors.

Audacious, inventive, brilliantly imagined, A Clash of Kings is a novel of dazzling beauty and boundless enchantment—a tale of pure excitement you will never forget.',
            'img_url' => 'https://images-na.ssl-images-amazon.com/images/I/51z4fTzjPaL._SX326_BO1,204,203,200_.jpg',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('books')->insert([
        	'title' => 'A Storm of Swords',
        	'author' => 'George R.R. Martin',
        	'published' => '2000',
            'summary' => 'Of the five contenders for power, one is dead, another in disfavor, and still the wars rage as violently as ever, as alliances are made and broken. Joffrey, of House Lannister, sits on the Iron Throne, the uneasy ruler of the land of the Seven Kingdoms. His most bitter rival, Lord Stannis, stands defeated and disgraced, the victim of the jealous sorceress who holds him in her evil thrall. But young Robb, of House Stark, still rules the North from the fortress of Riverrun. Robb plots against his despised Lannister enemies, even as they hold his sister hostage at King\'s Landing, the seat of the Iron Throne. Meanwhile, making her way across a blood-drenched continent is the exiled queen, Daenerys, mistress of the only three dragons still left in the world. Filled with the stench of death and decay from the destructive dynastic war, Daenerys is gathering allies and strength for an assault on King\'s Landing, hoping to win back the crown she believes is rightfully hers. But as opposing forces maneuver for the final titanic showdown, an army of barbaric wildlings bent on overwhelming the Seven Kingdoms arrives from the outermost line of civilization. In their vanguard is a horde of mythical Others—a supernatural army of the living dead whose animated corpses are unstoppable. And as the future of the land hangs in the balance, no one will rest in the quest for victory until the Seven Kingdoms have exploded in a veritable storm of swords. . . . Brilliantly conceived and grand in scope, A Storm of Swords is the incredible tale of a world of harsh beauty and powerful magic, torn by treachery, ravaged by brutality, and consumed by greed and ambition. It portrays a war-torn landscape in which nobles and commoners, heroes and villains, the freeborn and the enslaved, all struggle to survive and to find their destinies...along with the dazzling bounty and wondrous enchantment that was once their birthright in the Seven Kingdoms.',
            'img_url' => 'https://images-na.ssl-images-amazon.com/images/I/51XTk8bvA4L._SX336_BO1,204,203,200_.jpg',
        	'pages' => '992',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('books')->insert([
        	'title' => 'A Feast for Crows',
        	'author' => 'George R.R. Martin',
        	'published' => '2005',
        	'pages' => '784',
            'summary' => 'It seems too good to be true. After centuries of bitter strife and fatal treachery, the seven powers dividing the land have decimated one another into an uneasy truce. Or so it appears. . . . With the death of the monstrous King Joffrey, Cersei is ruling as regent in King’s Landing. Robb Stark’s demise has broken the back of the Northern rebels, and his siblings are scattered throughout the kingdom like seeds on barren soil. Few legitimate claims to the once desperately sought Iron Throne still exist—or they are held in hands too weak or too distant to wield them effectively. The war, which raged out of control for so long, has burned itself out. 

But as in the aftermath of any climactic struggle, it is not long before the survivors, outlaws, renegades, and carrion eaters start to gather, picking over the bones of the dead and fighting for the spoils of the soon-to-be dead. Now in the Seven Kingdoms, as the human crows assemble over a banquet of ashes, daring new plots and dangerous new alliances are formed, while surprising faces—some familiar, others only just appearing—are seen emerging from an ominous twilight of past struggles and chaos to take up the challenges ahead. 

It is a time when the wise and the ambitious, the deceitful and the strong will acquire the skills, the power, and the magic to survive the stark and terrible times that lie before them. It is a time for nobles and commoners, soldiers and sorcerers, assassins and sages to come together and stake their fortunes . . . and their lives. For at a feast for crows, many are the guests—but only a few are the survivors.',
            'img_url' => 'https://images-na.ssl-images-amazon.com/images/I/519B2wvyt6L._SX325_BO1,204,203,200_.jpg',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('books')->insert([
        	'title' => 'A Dance With Dragons',
        	'author' => 'George R.R. Martin',
        	'published' => '2011',
        	'pages' => '1040',
            'summary' => 'In the aftermath of a colossal battle, the future of the Seven Kingdoms hangs in the balance once again--beset by newly emerging threats from every direction. In the east, Daenerys Targaryen, the last scion of House Targaryen, rules with her three dragons as queen of a city built on dust and death. But Daenerys has three times three thousand enemies, and many have set out to find her. Yet, as they gather, one young man embarks upon his own quest for the queen, with an entirely different goal in mind.

To the north lies the mammoth Wall of ice and stone--a structure only as strong as those guarding it. There, Jon Snow, 998th Lord Commander of the Night’s Watch, will face his greatest challenge yet. For he has powerful foes not only within the Watch but also beyond, in the land of the creatures of ice.

And from all corners, bitter conflicts soon reignite, intimate betrayals are perpetrated, and a grand cast of outlaws and priests, soldiers and skinchangers, nobles and slaves, will face seemingly insurmountable obstacles. Some will fail, others will grow in the strength of darkness. But in a time of rising restlessness, the tides of destiny and politics will lead inevitably to the greatest dance of all. . . . 

Dubbed “the American Tolkien” by Time magazine, George R. R. Martin has earned international acclaim for his monumental cycle of epic fantasy. Now the #1 New York Times bestselling author delivers the fifth book in his spellbinding landmark series--as both familiar faces and surprising new forces vie for a foothold in a fragmented empire.',
            'img_url' => 'https://images-na.ssl-images-amazon.com/images/I/510OO1j3DbL._SX327_BO1,204,203,200_.jpg',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('books')->insert([
        	'title' => 'The Fellowship of the Ring',
        	'author' => 'J.R.R. Tolkien',
        	'published' => '1954',
        	'pages' => '432',
            'summary' => 'The first volume in J.R.R. Tolkien\'s epic adventure THE LORD OF THE RINGS
 
One Ring to rule them all, One Ring to find them, One Ring to bring them all and in the darkness bind them

In ancient times the Rings of Power were crafted by the Elven-smiths, and Sauron, the Dark Lord, forged the One Ring, filling it with his own power so that he could rule all others. But the One Ring was taken from him, and though he sought it throughout Middle-earth, it remained lost to him. After many ages it fell into the hands of Bilbo Baggins, as told in The Hobbit. In a sleepy village in the Shire, young Frodo Baggins finds himself faced with an immense task, as his elderly cousin Bilbo entrusts the Ring to his care. Frodo must leave his home and make a perilous journey across Middle-earth to the Cracks of Doom, there to destroy the Ring and foil the Dark Lord in his evil purpose.',
            'img_url' => 'https://images-na.ssl-images-amazon.com/images/I/51tW-UJVfHL._SX321_BO1,204,203,200_.jpg',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('books')->insert([
        	'title' => 'The Two Towers',
        	'author' => 'J.R.R. Tolkien',
        	'published' => '1954',
        	'pages' => '352',
            'summary' => 'The second volume in J.R.R. Tolkien\'s epic adventure THE LORD OF THE RINGS

One Ring to rule them all, One Ring to find them, One Ring to bring them all and in the darkness bind them

Frodo and his Companions of the Ring have been beset by danger during their quest to prevent the Ruling Ring from falling into the hands of the Dark Lord by destroying it in the Cracks of Doom. They have lost the wizard, Gandalf, in a battle in the Mines of Moria. And Boromir, seduced by the power of the Ring, tried to seize it by force. While Frodo and Sam made their escape, the rest of the company was attacked by Orcs. Now they continue the journey alone down the great River Anduin—alone, that is, save for the mysterious creeping figure that follows wherever they go. ',
            'img_url' => 'https://images-na.ssl-images-amazon.com/images/I/51zwIlXzbSL._SX328_BO1,204,203,200_.jpg',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('books')->insert([
        	'title' => 'The Return of the King',
        	'author' => 'J.R.R. Tolkien',
        	'published' => '1955',
        	'pages' => '432',
            'summary' => 'The third volume in J.R.R. Tolkien\'s epic adventure THE LORD OF THE RINGS 

One Ring to rule them all, One Ring to find them, One Ring to bring them all and in the darkness bind them

As the Shadow of Mordor grows across the land, the Companions of the Ring have become involved in separate adventures. Aragorn, revealed as the hidden heir of the ancient Kings of the West, has joined with the Riders of Rohan against the forces of Isengard, and takes part in the desperate victory of the Hornburg. Merry and Pippin, captured by Orcs, escape into Fangorn Forest and there encounter the Ents. Gandalf has miraculously returned and defeated the evil wizard, Saruman. Sam has left his master for dead after a battle with the giant spider, Shelob; but Frodo is still alive—now in the foul hands of the Orcs. And all the while the armies of the Dark Lord are massing as the One Ring draws ever nearer to the Cracks of Doom. ',
            'img_url' => 'https://images-na.ssl-images-amazon.com/images/I/51MlPWDaXGL._SX331_BO1,204,203,200_.jpg',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('books')->insert([
        	'title' => 'The Hobbit',
        	'author' => 'J.R.R. Tolkien',
        	'published' => '1937',
        	'pages' => '300',
            'summary' => 'A great modern classic and the prelude to The Lord of the Rings.
 
Bilbo Baggins is a hobbit who enjoys a comfortable, unambitious life, rarely traveling any farther than his pantry or cellar. But his contentment is disturbed when the wizard Gandalf and a company of dwarves arrive on his doorstep one day to whisk him away on an adventure. They have launched a plot to raid the treasure hoard guarded by Smaug the Magnificent, a large and very dangerous dragon. Bilbo reluctantly joins their quest, unaware that on his journey to the Lonely Mountain he will encounter both a magic ring and a frightening creature known as Gollum.',
            'img_url' => 'https://images-na.ssl-images-amazon.com/images/I/51uLvJlKpNL._SX321_BO1,204,203,200_.jpg',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('books')->insert([
        	'title' => 'The Silmarillion',
        	'author' => 'J.R.R. Tolkien',
        	'published' => '1977',
        	'pages' => '384',
            'summary' => 'The story of the creation of the world and of the First Age, this is the ancient drama to which the characters in The Lord of the Rings look back and in whose events some of them, such as Elrond and Galadriel, took part. The three Silmarils were jewels created by Fëanor, most gifted of the Elves. Within them was imprisoned the Light of the Two Trees of Valinor before the Trees themselves were destroyed by Morgoth, the first Dark Lord. Thereafter, the unsullied Light of Valinor lived on only in the Silmarils, but they were seized by Morgoth and set in his crown, which was guarded in the impenetrable fortress of Angband in the north of Middle-earth. The Silmarillion is the history of the rebellion of Fëanor and his kindred against the gods, their exile from Valinor and return to Middle-earth, and their war, hopeless despite all their heroism, against the great Enemy.',
            'img_url' => 'https://images-na.ssl-images-amazon.com/images/I/41MlelgdG-L._SX331_BO1,204,203,200_.jpg',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
