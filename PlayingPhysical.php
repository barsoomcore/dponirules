<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<head>
<title>Physical Actions</title>
<?php include ("Scripts/HeaderScript.php"); ?>
<?php include ("Scripts/Menu.php"); ?>


<h1>PHYSICAL ACTIONS</h1>

<p><a href="BasicsAbilities.php">Ability scores</a>, <a href="Skills.php">skills</a>, and <a href="Feats.php">feats</a> define characters' physical capabilities in DPoNI. They affect the ability to move, carry loads, and throw things, three topics discussed in this section. Heroes can also push past their physical limitations using extra effort.</p>

<h2><a name=Moving">Moving</a></h2>

<p>Heroes move around a lot, especially when the action gets going. The Narrator moderates the pace of a game session, and so determines when movement is important enough to be worth measuring. During casual scenes, you usually won't have to worry about movement rates. If a character arrives somewhere and takes a stroll around, there's no need to know exactly how fast the character goes; it just happens. During action scenes, however, it may be important to have an idea how fast and how far a hero can move.</p>

<h3>Movement Pace</h3>

<p>Characters generally move at a normal, accelerated, or all-out pace. Most characters' base speed is 30 feet, meaning a character can walk 30 feet as a move action every round. The following movement paces modify base speed:</p>

<dl>
	<dt>Normal</dt>
	<dd>A normal pace represents unhurried but purposeful movement at the character's normal speed, which is usually 30 feet per round (about 3 miles per hour). This is the equivalent of walking for a normal unencumbered human.</dd>
	<dt>Accelerated</dt>
	<dd>An accelerated pace, sometimes called a hustle or double move, is 6 miles per hour. This is the equivalent of jogging for a normal unencumbered human. Taking two move actions in a round is accelerated movement.</dd>
	<dt>All Out</dt>
	<dd>Moving four times your base speed is an all-out pace, the equivalent of running or sprinting, usually 120 feet per round (about 12 miles per hour). All-out movement is a full-round action, and you cannot use either your <a href="Combat.php#Dodge">Dodge</a> or <a href="Combat.php#Parry">Parry</a>, since you're not easily able to avoid attacks. You can move all out for 10 rounds, plus twice your Constitution score (so 8 rounds for Constitution -1, 16 rounds for Constitution +3, and so forth). After that you must succeed at a Constitution check (Difficulty 10) to continue moving at this pace. You must check again each round you continue to move all out, and the Difficulty of this check increases by 1 for each check you have made. When you fail a check, you become <a href="PlayingConditions.php?Name=Fatigued">fatigued</a> and must drop to an accelerated or normal pace.</dd>
</dl>

<a name="HamperedMovement"><h3>Hampered Movement</h3></a>

<p>Obstructions, bad surface conditions, and poor visibility can hamper movement. The Narrator determines the category into which a specific condition falls (see the Hampered Movement table). When movement is hampered, multiply the standard distance by the movement penalty (a fraction) to determine the distance covered. For example, a character who can normally cover 60 feet with a double move can cover only 30 feet if moving through thick undergrowth.</p>

<p>If more than one condition applies, multiply the normal distance covered by all movement penalty fractions that apply. For instance, a character who normally could cover 60 feet with a double move could cover only 15 feet moving through thick undergrowth in heavy fog (one-quarter his double move). </p>

<h5>Table: Hampered Movement</h5>
<table class="last-row"><th>Condition</th><th>Examples</th><th class="center">Movement Penalty</th>
<tr><td><b>Obstruction</b></td><td></td><td></td></tr>
<tr class="odd-row"><td>Moderate</td><td>Undergrowth</td><td class="center">x3/4</td></tr>
<tr><td>Heavy</td><td>Thick Undergrowth</td><td class="center">x1/2</td></tr>
<tr><td><b>Surface</b></td><td></td><td></td></tr>
<tr class="odd-row"><td>Bad</td><td>Steep slope, mud</td><td class="center">x1/2</td></tr>
<tr><td>Very Bad</td><td>Deep snow, slick ice</td><td class="center">x1/4</td></tr>
<tr><td><b>Poor Visibility</b></td><td></td><td></td></tr>
<tr class="odd-row"><td></td><td>Darkness, heavy fog</td><td class="center">x1/2</td></tr></table>

<h2><a name="Carrying">Carrying</a></h2>

<p>Strength determines how much weight heroes can lift and how much any additional encumbrance slows them down. See the Carrying Capacity table for how much characters can lift based on their Strength score. (The figures in the Carrying Capacity table are for medium creatures. Larger and smaller creatures can carry more or less depending on their size category. See <a href="CharGenSize.php">Size</a> for details.)</p>

<h5>Table: Carrying Capacity</h5>
<table class="last-row" cellpadding=0 cellspacing=0 width="75%">
<th>Strength</th><th>Light Load</th><th>Medium Load</th><th>Heavy Load</th><th>Maximum Load</th><th>Push/Drag</th>
<tr class="odd-row" class="center"><td class="center">-5</td><td class="center">3 lb.</td><td class="center">6 lb.</td><td class="center">10 lb.</td><td class="center">20 lb.</td><td class="center">50 lb.</td></tr>
<tr><td class="center">-4</td><td class="center">6 lb.</td><td class="center">13 lb.</td><td class="center">20 lb.</td><td class="center">40 lb.</td><td class="center">100 lb.</td></tr>
<tr class="odd-row" class="center"><td class="center">-3</td><td class="center">13 lb.</td><td class="center">26 lb.</td><td class="center">40 lb.</td><td class="center">80 lb.</td><td class="center">200 lb.</td></tr>
<tr><td class="center">-2</td><td class="center">20 lb.</td><td class="center">40 lb.</td><td class="center">60 lb.</td><td class="center">120 lb.</td><td class="center">300 lb.</td></tr>
<tr class="odd-row" class="center"><td class="center">-1</td><td class="center">26 lb.</td><td class="center">53 lb.</td><td class="center">80 lb.</td><td class="center">160 lb.</td><td class="center">400 lb.</td></tr>
<tr><td class="center">0</td><td class="center">33 lb.</td><td class="center">66 lb.</td><td class="center">100 lb.</td><td class="center">200 lb.</td><td class="center">500 lb.</td></tr>
<tr class="odd-row" class="center"><td class="center">+1</td><td class="center">43 lb.</td><td class="center">86 lb.</td><td class="center">130 lb.</td><td class="center">260 lb.</td><td class="center">650 lb.</td></tr>
<tr><td class="center">+2</td><td class="center">58 lb.</td><td class="center">116 lb.</td><td class="center">175 lb.</td><td class="center">350 lb.</td><td class="center">875 lb.</td></tr>
<tr class="odd-row" class="center"><td class="center">+3</td><td class="center">76 lb.</td><td class="center">153 lb.</td><td class="center">230 lb.</td><td class="center">450 lb.</td><td class="center">1,150 lb.</td></tr>
<tr><td class="center">+4</td><td class="center">100 lb.</td><td class="center">200 lb.</td><td class="center">300 lb.</td><td class="center">600 lb.</td><td class="center">1,500 lb.</td></tr>
<tr class="odd-row" class="center"><td class="center">+5</td><td class="center">133 lb.</td><td class="center">266 lb.</td><td class="center">400 lb.</td><td class="center">800 lb.</td><td class="center">2,000 lb.</td></tr>
<tr><td class="center">+6</td><td class="center">173 lb.</td><td class="center">346 lb.</td><td class="center">520 lb.</td><td class="center">1,040 lb.</td><td class="center">2,600 lb.</td></tr>
<tr class="odd-row" class="center"><td class="center">+7</td><td class="center">233 lb.</td><td class="center">466 lb.</td><td class="center">700 lb.</td><td class="center">1,400 lb.</td><td class="center">3,500 lb.</td></tr>
<tr><td class="center">+8</td><td class="center">306 lb.</td><td class="center">613 lb.</td><td class="center">920 lb.</td><td class="center">1,840 lb.</td><td class="center">4,600 lb.</td></tr>
<tr class="odd-row" class="center"><td class="center">+9</td><td class="center">400 lb.</td><td class="center">800 lb.</td><td class="center">1,200 lb.</td><td class="center">2,400 lb.</td><td class="center">6,000 lb.</td></tr>
<tr><td class="center">+10</td><td class="center">532 lb.</td><td class="center">1,064 lb.</td><td class="center">1,600 lb.</td><td class="center">3,200 lb.</td><td class="center">8,000 lb.</td></tr>
</table>

<p>Carrying more than a light load imposes penalties to Acrobatics, Climb, Escape Artist, Jump, Sleight of Hand, Stealth, and Swim checks. The penalty is doubled for Swim checks. 

<dl>
	<dt>Light Load</dt> 
	<dd>Characters can lift and carry up to a light load without any penalties or difficulties.</dd>
	<dt>Medium Load</dt>
	<dd>Characters carrying a medium load have a maximum <a href="Combat.php#Dodge">Dodge</a> of +3 and a -3 check penalty. They move at 2/3 normal speed.</dd>
	<dt>Heavy Load</dt>
	<dd>Characters can lift up to a heavy load overhead. They have a maximum <a href="Combat.php#Dodge">Dodge</a> of +1 and a -6 check penalty. They move at 2/3 normal speed. In addition, the multiple they apply to their move when they <a href="CombatActions.php?Name=Move%20All%20Out">move all-out</a> (normally four) is reduced by one.</dd>
	<dt>Maximum Load</dt>
	<dd>Characters can lift up to the maximum load off the ground, but can only stagger around with it. While overloaded in this way, characters cannot use their <a href="Combat.php#Dodge">Dodge</a> or <a href="Combat.php#Parry">Parry</a> and can move only 5 feet per round as a full-round action. You cannot take any other actions while supporting a maximum load.</dd>
	<dt>Push/Drag</dt>
	<dd>Characters can push or drag up to five times their heavy load weight, moving at 1/2 normal speed. Favorable conditions (smooth ground, dragging a slick object) double these numbers, and bad circumstances (broken ground, pushing an object that snags) can reduce them to one-half or less.</dd>
</dl>


<h5>Table: Carrying Loads</h5>
<table class="last-row" width="600px"><th>Load</th><th class="center">Max Dex</th><th class="center">Check Penalty</th><th class="center">Speed</th><th class="center">All-out Move</th>
<tr class="odd-row"><td>Light</td><td class="center">None</td><td class="center">0</td><td class="center">Normal</td><td class="center">Normal</td></tr>
<tr><td>Medium</td><td class="center">+3</td><td class="center">-3</td><td class="center">2/3</td><td class="center">Normal</td></tr>
<tr class="odd-row"><td>Heavy</td><td class="center">+1</td><td class="center">-6</td><td class="center">2/3</td><td class="center">-1 multiple</td></tr>
<tr><td>Maximum</td><td class="center">+0</td><td class="center">--</td><td class="center">5 ft.</td><td class="center">--</td></tr></table>

<h2>Throwing</h2>

<p>Characters can throw any object they can lift, up to a heavy load. (You annot throw your maximum load; only drop it adjacent to you.) Picking up an object is a move action, while throwing something is a standard action, so it's possible to pick up and throw an object in one round.</p>

<p>The distance you can throw an object is based on its weight and your Strength. You can throw your heavy load 5 feet. For every 2 points of Strength you have over the minimum required to lift an object as a heavy load, double the distance you can throw it. This means a Strength +5 character has 5 points more Strength than needed to lift 100 pounds as a heavy load and can therefore throw a 100-pound object up to 20 feet (5 feet x 2 x 2).</p>

<h2><a name="ExtraEffort">Extra Effort</a></h2>

<p>Heroes are often called upon to perform feats beyond their normal limits. This calls for extra effort. Players can use extra effort to improve a hero's abilities in exchange for the hero suffering some fatigue from the effort.</p>

<p>Extra effort is a free action and can be performed at any time during a hero's turn, but is limited to once per round. A hero using extra effort can gain one of the following benefits:</p>

<ul>
	<li><b>Check bonus:</b> +2 bonus on a single check.</li> 
	<li><b>Increase carrying capacity:</b> The hero's carrying capacity doubles for one round. </li>
	<li><b>Increase movement:</b> The hero's movement speed doubles for one round (this includes jumping distances). </li>
	<li><b>Willpower:</b> Gain an additional Will saving throw against an ongoing effect that allows for Will saves, including various supernatural powers. </li>
</ul>

<p>At the beginning of the round immediately after extra effort, the hero becomes <a href="PlayingConditions.php?Name=Fatigued">Fatigued</a>. A <a href="PlayingConditions.php?Name=Fatigued">fatigued</a> hero becomes <a href="PlayingConditions.php?Name=Exhausted">exhausted</a>, and an <a href="PlayingConditions.php?Name=Exhausted">exhausted</a> hero becomes <a href="PlayingConditions.php?Name=Unconscious">unconscious</a>, the round after using extra effort. If you spend a Conviction point at the start of the round following extra effort to shake off the fatigue, the hero suffers no adverse effects. 

<p>Other specific uses of extra effort (usually involving supernatural powers) are specified in other places.</p>

</div>
</body>
</html>