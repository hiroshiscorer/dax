@extends('app')

@section('content')
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="green box text-center">
                        <h1>Rules</h1>

                    </div>

                    <div class="cyan box">
                        <h2>Structure of the Tournament</h2>
                        <p>This is a double-elimination bracket. Players will play one match (consisting of two 1v1 dogfights) every 5 days. The losing players will move to the secondary bracket to compete for a chance to reenter the primary bracket in the semi-final. The winner of the tournament receives a shiny new ribbon; ribbon held by the winner only until the next ladder, at which time it will transfer to the new winner, or be retained by the champion… </p>
                        <h2>Who Can Play</h2>
                        <p>Anyone who has XvT. Open to all clubs with XvT interest.</p>
                        <h2>Seeding the Bracket</h2>
                        <h3 class="indent">Primary Bracket</h3>
                        <p class="indent">Players will be matched at random by a bot. Each player will be assigned a number (e.g., 1-10); the bot will then count out the numbers randomly, and players will be paired up in that order. For example, if the bot counts out 8, 2, 5, 7, then player 8 and player 2 will face off in one match, and player 5 and player 7 will face off in the next match. This seeding process will continue until all players are assigned a match for Round 1. </p>
                        <h3 class="indent">Secondary Bracket</h3>
                        <p class="indent">Players who lose a match transfer to the secondary bracket. The secondary bracket will populate in the order that primary bracket match results are reported. The secondary bracket will kick off in Round 2. Subsequent rounds of the bracket will populate in the order that results are reported; these results may come from the primary bracket or the secondary bracket. </p>
                        <h3 class="indent">Odd Number of Players</h3>
                        <p class="indent">If there are an odd number of players, so that one player cannot be matched, the bot will randomly select an already-matched player to fly against the odd player. This is done solely to complete the bracket; the outcome of this match affects the standing of the odd player only. This process will repeat each round as long as an odd number of players are present. The pool of matches for the odd player is limited to the other players in the odd player’s bracket (i.e., there is no cross-over between brackets).</p>
                        <h3 class="indent">Completing the Brackets</h3>
                        <p class="indent">The winner of the secondary bracket will play the runner up of the primary bracket. The winner of that match will play the winner of the primary bracket to determine the tournament champion.</p>
                        <h2>Scheduling and Reporting Matches</h2>
                        <h3 class="indent">Definition of a Round</h3>
                        <p class="indent">Each round lasts 5 days. The period starts at 12:00 pm GMT on day 1 and concludes at 11:59 am GMT on day 5. Players must schedule and report their matches within those 5 days to avoid forfeiting the round.</p>
                        <h3 class="indent">Scheduling and Reporting Matches</h3>
                        <p class="indent">All scheduling will be public and take place in a designated Discord channel. Players are required to make a good-faith effort to schedule matches promptly. Once a match is played, a screenshot of the result must be posted in the designated Discord channel in order to be valid. </p>
                        <h3 class="indent">Seeding Unscheduled Matches</h3>
                        <p class="indent">At the conclusion of the round, any players who have not scheduled matches with their opponents will have 24 hours to compete for a spot in the next round. This 24 hour period starts at 12:00 pm GMT on day 5 and concludes at 11:59 am GMT on day 6. </p>
                        <p class="indent">Within this 24 hour period, each unscheduled player wishing to continue in the tournament must fly the Training Exercise “Custom Dogfight.” The following settings must be used: </p>
                        <ul class="indent">
                            <li>Faction = Rebel</li>
                            <li>Difficulty = Hard</li>
                            <li>Randomize = Off</li>
                            <li>Craft Waves = None</li>
                            <li>Starfighter Collisions = On</li>
                            <li>Craft = X-Wing</li>
                            <li>Warheads = Missles</li>
                            <li>Countermeasures = None</li>
                        </ul>
                        <p class="indent">Note that the default on this mission includes Advanced Missiles—these must be switched to Missiles. Before engaging any starfighters, the player must shoot and score a hit on each of the following containers: T/F, T/B, T/I. (The containers labeled “T/A” and “Challenge” should be ignored.) </p>
                        <p class="indent">This unscheduled match must be flown with an observer. The observer must maintain sufficient distance from the dogfight to avoid drawing craft away from the player, and must not engage any craft. The observer must validate the results posted in the designated Discord channel by stating in a post in that channel that the match was actively observed to have been played in accordance with the rules. Video of the match can be recorded, but an observer must still be present in the mission.</p>
                        <p class="indent">The player from each unscheduled match with the highest solo score will move on. Only posted screenshots will be counted. Players who post no results in a round are deemed to have lost that round.</p>
                        <h2>How Matches are Played</h2>
                        <h3 class="indent">Craft Selection</h3>
                        <p class="indent">Each player must fly the same craft. No warheads or countermeasures may be used. The craft will be selected by a random number generator bot. The following numbers and crafts correspond:</p>
                        <ul class="indent">
                            <li>1 = Z-95</li>
                            <li>2 = X-Wing</li>
                            <li>3 = Y-Wing</li>
                            <li>4 = A-Wing</li>
                            <li>5 = B-Wing</li>
                            <li>6 = TIE Fighter</li>
                            <li>7 = TIE Interceptor</li>
                            <li>8 = TIE Bomber</li>
                            <li>9 = Assault Gunboat</li>
                            <li>10 = TIE Advanced</li>
                        </ul>
                        <h3 class="indent">Map Selection</h3>
                        <p class="indent">The map for the primary bracket is simple 1v1 (empty starfield). The map for the secondary bracket is Asteroids.</p>
                        <h3 class="indent">Platform</h3>
                        <p class="indent">Rooms will be set up in Gameranger. Voice will be hosted in the TRA Discord channel.</p>
                        <h3 class="indent">Gameplay</h3>
                        <p class="indent">Each match will consist of two 1v1 dogfights. Each player in the match will host one 1v1 dogfight. Players will post screenshots for both dogfights in the designated Discord channel, and the kills for the two dogfights will be combined. The player with the highest combined number of kills wins the match.</p>
                        <h3 class="indent">Breaking a Tie</h3>
                        <p class="indent">If the combined number of kills for two players in a match is the same, the players will roll for another craft and play another match consisting of two 1v1 dogfights in which the players alternate as host. The tiebreaker craft must be different from the original match craft.</p>
                        <h2>Dispute Resolution</h2>
                        <p>Any disputes not addressed by these rules will be resolved as equitably as possible by tourney admins. Admins retain discretion not to address a dispute if this produces the fairest overall result. All admin decisions are final.</p>
                    </div>

                </div>
            </div>
        </div>
    </main>
@endsection
