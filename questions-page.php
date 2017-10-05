<?php
  include "header.php";
?>

<div class="question-container">
        <!-- question section -->
    <h2 class="policy-topic">Issue X</h2>
    <p class="question">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    quis nostrud exercitation ullamco laboriss?</p>
    <!-- end question -->
    <div class="question-navs">
        <button><< Previous Question</button>
        <button>Skip this >></button>
      </div>
    <div>
        <form action="">
            <ul class="answer">
                <li>
                    <input type="radio" id="agree" name="answer" value="agree" />
                    <label for="agree">Agree</label>
                </li>
                <li>
                    <input type="radio" id="neutral" name="answer" value="neutral" />
                    <label for="neutral">Neutral</label>
                </li>
                <li>
                    <input type="radio" id="disagree" name="answer" value="disagree" />
                    <label for="disagree">Disagree</label>
                </li>
            </ul>
        </form>
    </div>
</div>


<?php include ('footer.php'); ?>