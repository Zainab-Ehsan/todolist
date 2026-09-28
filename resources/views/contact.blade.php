@extends('layouts.app')

@section('content')

<section class="page-header">

    <div>
        <div class="badge">Get in Touch</div>

        <h1>Contact Us</h1>

        <p>
            Have a question? Send us a message.
        </p>
    </div>

</section>


<section class="contact-container">

    <div class="contact-info">

        <h2>Let's talk</h2>

        <p>
            If you have any questions about TaskFlow,
            feel free to contact us using the form.
        </p>

        <div class="contact-detail">
            <strong>Email</strong>
            <span>hello@taskflow.test</span>
        </div>

        <div class="contact-detail">
            <strong>Project</strong>
            <span>Laravel Docker Lab</span>
        </div>

    </div>


    <div class="contact-form">

        <form>

            <label>Name</label>
            <input type="text" placeholder="Enter your name">


            <label>Email</label>
            <input type="email" placeholder="Enter your email">


            <label>Message</label>
            <textarea rows="5" placeholder="Write your message"></textarea>


            <button type="submit" class="btn primary">
                Send Message →
            </button>

        </form>

    </div>

</section>

@endsection
