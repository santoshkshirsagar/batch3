<?php require_once('header.php'); ?>
<div class="container py-5">
    <h1>Contact</h1>
    <div class="row">
        <div class="col-md-6">


            <div class="mb-3">
                <h5>Email:</h5> test@example.com<br/>
            </div>
            <div class="mb-3">
                <h5>Address:</h5> Mumbai, Maharashtra<br/>
            </div>

            <div class="my-3 border rounded p-3">
            <form action="contact-post.php" method="POST">
                <div class="mb-3">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="message">Message</label>
                    <textarea name="message" id="message" class="form-control"></textarea>
                </div>
                <input type="submit" class="btn btn-primary" value="Submit">
            </form>
            </div>
        </div>
        <div class="col">

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3774.2125432535267!2d72.83246561489884!3d18.921984087176394!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7d1c73a0d5cad%3A0xc70a25a7209c733c!2sGateway%20Of%20India%20Mumbai!5e0!3m2!1sen!2sin!4v1630251056493!5m2!1sen!2sin" class="w-100" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

        </div>
    </div>
    
</div>
<?php include('footer.php'); ?>