<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<HTML>
<HEAD>
<TITLE>Time</title>
<?php include ("Scripts/HeaderScript.php"); ?>
<?php include ("Scripts/Menu.php"); ?>

<h1>TIME</h1>

<h2>Scenes</h2>
<p>In DINO-PIRATES OF NINJA ISLAND, time is measured by the <em>scene</em>. A scene may be an encounter, a combat, a conversation, or any sort of moment that moves the story along. Anything that happens in the game, happens in a scene. There are three kinds of scenes:</p>

<h3>Ordinary</h3>
<p>An ordinary scene is a scene where no <a href="BasicsConviction.php">Conviction points</a> get used, and none are needed. There may be combat in an ordinary scene, but at no point in the combat does anyone (players or Narrator) spend a <a href="BasicsConviction.php">Conviction point</a>.</p>

<h3>Dramatic</h3>
<p>A dramatic scene is more significant and more dangerous than an ordinary scene. A scene is dramatic for if:</p>

<ul>
	<li>A player spends a <a href="BasicsConviction.php">Conviction point</a>, or</li>
	<li>A character spends a full round of combat without any available <a href="BasicsConviction.php">Conviction points</a></li>
</ul>

<h3>Climactic</h3>
<p>A climactic scene is one in which major story points are resolved, major villains confronted, or significant challenges overcome. A scene is climactic if:</p>

<ul>
	<a name="Exit"><li>The Narrator spends a <a href="BasicsConviction.php">Conviction point</a> against the party</li></a>
</ul>

<p>Note that this means that any time the Narrator spends a <a href="BasicsConviction.php">Conviction point</a> against the heroes, the scene immediately becomes a Climactic scene.</p>

<h2>Ending a Scene</h2>
<p>Normally a scene ends whenever the Narrator determines that the objective of the scene has been reached. Often this will be after a foe has been defeated, or an interaction successful. Ordinarily, characters cannot chose to end a scene as they prefer -- although they may attempt to exit a scene prior to its ending.</p>

<p>A character who leaves a scene (as opposed to leaving a room) cannot return to the scene -- that scene is over as far as they are concerned. They have to wait until a new scene begins in order to rejoin the action. Characters leaving scenes get to immediately make the Recovery checks appropriate for the ending of a scene, as outlined below in "Scenes and Recovery".</p>

<p>Of course, a character can simply choose to try and run away. If their attempt to leave is not interrupted, then they are out of the scene. However, if anyone follows them or interferes with their departure, then the scene is not over and the action continues.</p>

<p>However, if someone really just wants to get out of a scene, either because they're afraid they can't escape or they think they won't survive, they can spend a <a href="BasicsConviction.php">Conviction point</a> and depart the scene immediately. Other characters cannot attempt to prevent this departure, or follow them, except by spending a Conviction point of their own, as described below.</p>

<h3>Preventing an Exit</h3>
<p>If one character spends a Conviction point on a departure, another character in the scene can choose to spend a Conviction point of their own in order to attempt to prevent the exit. If they spend the Conviction point, then the two characters make an opposed check of whatever seems suitable according to the departing character's mode of exit -- if nothing suggests itself then use opposed Charisma checks. If the departing character succeeds, their exit is unimpeded; if they fail, their exit is prevented and they remain in the scene.</p>

<h2>Scenes and Recovery</h2>
<p>After any scene, a character can make a Damage Recovery check. After a Dramatic or Climactic scene, a character can make a Conviction Recovery check. In addition, certain scenes automatically recover some conditions, as follows.</p>

<h3>After an Ordinary Scene</h3>
<p>After an ordinary scene, in addition to making a Damage and a Fatigue Recovery check, heroes can automatically recover all <a href="PlayingConditions.php?Name=Bruised">Bruised</a>, <a href="PlayingConditions.php?Name=Hurt">Hurt</a>, <a href="PlayingConditions.php?Name=Dazed">Dazed</a>, <a href="PlayingConditions.php?Name=Staggered">Staggered</a> and <a href="PlayingConditions.php?Name=Unconscious">Unconscious</a> conditions. This recovery is subject to <a href="CombatDamage.php#Recovery">normal recovery rules</a>, however, and so if a more serious condition exists (<a href="PlayingConditions.php?Name=Disabled">Disabled</a>, for example), no lesser condition can be recovered from.</p>

<h3>After a Dramatic Scene</h3>
<p>After a dramatic scene, in addition to the recovery enabled in an ordinary scene, heroes can attempt a Conviction Recovery check to recover a spent <a href="BasicsConviction.php">Conviction point</a>.</p>

<h3>After a Climactic Scene</h3>
<p>After a climactic scene, in addition to the recovery enabled in ordinary and dramatic scenes, heroes automatically recover a <a href="BasicsConviction.php">Conviction point</a> in addition to making a Conviction recovery check, and they ignore all carry-over conditions (see below).</p>

<h2>Scenes and Carry-Over Conditions</h2>
<p>Some conditions are serious enough that they cause an impact on the following scene. If a character suffers one of these conditions during a scene, they must accept the carry-over condition in the next scene, regardless of their recovery checks. If the scene in which the condition is suffered is a climactic scene, however, carry-over conditions do not apply to the following scene.</p>
<p>Note, however, that these carry-over conditions are not applied in excess of existing conditions. If a character already has the carry-over condition, then no new condition is applied.</p>

<h3>Damage Carry-Over</h3>
<h4><a href="PlayingConditions.php?Name=Dying">Dying</a></h4>
<p>A character who suffers a <a href="PlayingConditions.php?Name=Dying">Dying</a> condition in a scene must start the next scene with at least two <a href="PlayingConditions.php?Name=Wounded">Hurt</a> conditions.</p>

<h4><a href="PlayingConditions.php?Name=Disabled">Disabled</a></h4>
<p>A character who suffers a <a href="PlayingConditions.php?Name=Disabled">Disabled</a> condition in a scene must start the next scene with at least one <a href="PlayingConditions.php?Name=Hurt">Hurt</a> condition.</p>

<h2>Between Scenes</h2>
<p>Of course the world carries on between scenes, and players may want their characters to perform actions between scenes. This is fine and reasonable. Characters can do mundane tasks, have conversations and so on between scenes. If a character wishes to use a <a href="Powers.php">supernatural power</a> between scenes, then they must make Resilience checks as normal, and they begin the next scene with any non-lethal damage acquired thereby.</p>
<p>Characters cannot spend <a href="BasicsConviction.php">Conviction points</a> between scenes.</p>

</div>
</body>
</html>