@extends('front_template')

@section('meta_description')
<meta content="<?php echo $data->title; ?>" name="description">
@endsection
@section('meta_keywords')
<meta content="<?php echo $data->tags; ?>-<?php echo $data->title; ?>" name="keywords">
@endsection

@section('content')

<main id="main">


    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <h2><?php echo $data->title; ?></h2>
        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-12 entries">
                    <article class="entry entry-single">
                        <div class="entry-content">
                            <?php echo $data->body; ?>
                        </div>
                    </article>
                    <article class="entry entry-single">
                        <div class="entry-content">
                            <?php foreach ($answer_data as $answer_key => $answer_item) { ?>
                                <?php echo $answer_item->body; ?>
                            <?php } ?>
                        </div>
                    </article>
                </div><!-- End blog entries list -->
            </div>
        </div>
    </section><!-- End Blog Single Section -->

</main><!-- End #main -->
@endsection