<style>

</style>

<div class='container-fluid bg-transparent py-4' style="padding:15%;">
    <h2 class="text-dark text-center mt-5">OUR FEATURES</h2></header>
    <div class="row">
        <div class="col-md-4">
            <div class="card border-0 shadow" style="width: 18rem; margin-top:50%;">
                <div class="card-body">
                    <h5 class="card-title">What is Culineira</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="row">
                <div class="card border-0 shadow mt-5 mx-2" style="width:220px;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2">
                                <i class="fa-solid fa-book fa-2x"></i>
                            </div>
                            <div class="col-md-10">
                                <h5 class="card-title">Recipes</h5>
                            </div>
                        </div>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                    </div>
                </div>
                <div class="card border-0 shadow mt-5 mx-2" style="width:220px;">
                    <div class="card-body">
                    <div class="row">
                            <div class="col-md-2">
                                <i class="fa-solid fa-kitchen-set fa-2x"></i>
                            </div>
                            <div class="col-md-10">
                                <h5 class="card-title">My Kitchen</h5>
                            </div>
                        </div>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                    </div>
                </div>
                <div class="card border-0 shadow mt-5 mx-2" style="width:220px;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2">
                                <i class="fa-solid fa-people-group fa-2x"></i>
                            </div>
                            <div class="col-md-10">
                                <h5 class="card-title mx-1">Community</h5>
                            </div>
                        </div>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                    </div>
                </div>
                <div class="card border-0 shadow mt-3 mx-2" style="width:220px;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2">
                                <i class="fa-solid fa-link fa-2x"></i>
                            </div>
                            <div class="col-md-10">
                                <h5 class="card-title mx-1">Dependencies</h5>
                            </div>
                        </div>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                    </div>
                </div>
                <div class="card border-0 shadow mt-3 mx-2" style="width:220px;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2">
                                <i class="fa-solid fa-person-chalkboard fa-2x"></i>
                            </div>
                            <div class="col-md-10">
                                <h5 class="card-title mx-1">Classroom</h5>
                            </div>
                        </div>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                    </div>
                </div>
                <div class="card border-0 shadow mt-3 mx-2" style="width:220px; background:#EB7336;">
                    <div class="card-body">
                        <form action="/login/postFeedback" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-2">
                                    <i class="fa-solid fa-comment-dots fa-2x text-white"></i>
                                </div>
                                <div class="col-md-10">
                                    <h5 class="text-white">Feedback</h5>
                                </div>
                            </div>
                            <textarea class="form-control" rows="5" aria-label="With textarea" name="feedback_body" placeholder="type your feedback here..."></textarea>
                            <button class="btn btn-success mt-2" type="submit">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
