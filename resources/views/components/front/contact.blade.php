<section class="contact_section layout_padding-bottom">
    <div class="container">
        <div class="heading_container">
            <h2>
                Get In Touch
            </h2>
        </div>
        <div class="row">
            <div class="col-md-7">
                <div class="form_container">
                    <form action="{{ route('contacts.store') }}" method="post">
                        @csrf <!-- Add CSRF token for security -->

                        <div>
                            <input type="text" name="name" placeholder="Full Name" />
                        </div>
                        <div>
                            <input type="email" name="email" placeholder="Email" />
                        </div>
                        <div>
                            <input type="text" name="phone" placeholder="Phone Number" />
                        </div>
                        <div>
                            <textarea name="message" class="message-box" placeholder="Message"></textarea>
                        </div>
                        <input type="hidden" name="form_source" value="front">
                        <div class="btn_box">
                            <button type="submit">
                                SEND
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-5">
                <div class="img-box">
                    <img src="{{ asset('assets') }}/images/contact-img.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
