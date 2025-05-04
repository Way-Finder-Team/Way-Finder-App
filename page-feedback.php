<?php get_header(); ?>

        <div class="feedBacktop">
            <form action="#" method="post" id="theForm">
                <legend><h1 class="feedback-h1">Give Us Some Feedback!</h1></legend>
                   <div id="form-container">
                    <div class="two">
                        <label for="Title">Title</label>
                        <input type="text" name="Title" id="Title" placeholder="Enter your title" required>
                    </div>                    
                    <div class="two">
                        <label for="email">Email Address</label>
                        <input type="email" name="email" id="email" placeholder="Enter your email address">
                    </div>
                    <div class="three">
                        <label for="enquiry">Enquiry</label>
                        <textarea  name="enquiry" id="enquiry" placeholder="Enter your feedback here..." rows="5" cols="50" required></textarea>
                    </div> 
                    <div class="four">
                        <label for="terms">
                        <input type="checkbox" name="terms" id="terms" required>I agreed with terms and conditions.</label>
                    </div>
                    <div class="four">
                        <input type="submit" value="Submit" id="submit">
                    </div>
                    <div class="four">
                        <input type="reset" value="Cancel" id="cancel">
                    </div>
                   </div>
            </form>	

        </div>
    </div>  <!-- wrapper -->
</body>
</html>
