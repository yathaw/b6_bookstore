
<!--================Home Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <h2> Request Book </h2>
                    <div class="page_link">
                        <a href="">Home</a>
                        <a > Request Book </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--================End Home Banner Area =================-->
<section class="sample-text-area">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-12 col-md-12 col-sm-12">
                <h3 class="mb-30 title_color"> Request Book </h3>
                <form action="<?php echo base_url('request/send') ?>" method="POST">
                    
                    


                    <div class="mt-10">
                        <input type="text" name="title" placeholder="Title" class="single-input" >
                    </div>

                    <div class="mt-10">
                        <input type="text" name="author" placeholder="Author Name" class="single-input" >
                    </div>

                    <div class="mt-10">
                        <textarea name="description" class="single-textarea" placeholder="Description" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Description'"
                                 required></textarea>
                    </div>

                    <div class="mt-10">
                        <div class="col-md-12 form-group">
                            <button type="submit" value="submit" class="btn submit_btn"> Send </button>
                        </div>
                    </div>

                </form>
            </div>

        </div>
    </div>
</section>
