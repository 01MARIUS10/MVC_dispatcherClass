        
        <div class="container">
            <div class="content-wrapper">
                <div class="row gutters">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class=" mt-1 mb-2">
                            <!-- Row start -->
                            <!-- the div who content the left and right row -->
                            <div class="row row1 no-gutters radius-container">
                                <div class="br-40 p-2 col-xl-4 col-lg-4 col-md-4 col-sm-3 col-3">
                                    <div class="users-container">
                                        <div class="chat-search-box mb-3">
                                            <div class="input-group">
                                                <input class="form-control" placeholder="Search">
                                                <div class="input-group-append">
                                                    <button type="button" class="btn btn-info">
                                                        <i class="fa fa-search"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="users">
                                            <?php foreach ($Chat as $chat) :?>
                                            <li class="person" data-chat="person1">
                                                <div class="user">
                                                    <img src="../assets/profil/cf.jpeg" alt="Retail Admin">
                                                    <span class="status busy"></span>
                                                </div>
                                                <p class="name-time">
                                                    <span class="name">Steve Bangalter</span>
                                                    <span class="time"><?= $chat->chat->date ?></span>
                                                </p>
                                            </li>
                                            <?php endforeach ;?>
                                        </ul>
                                    </div>
                                </div>
                                <div class="br-40 nobg col-xl-8 col-lg-8 col-md-8 col-sm-9 col-9">
                                    <div class="selected-user ">
                                        <img src="<?=ROOT?>/assets/profil/RAZAFITSALAMA_Tsiorimbola_Marius.png" alt="">
                                    </div>
                                    <div class="chat-container">
                                        <ul class="chat-box chatContainerScroll">
                                            <?php foreach($Chat as $chat): ?>
                                            <li class="chat-left">
                                                <div class="chat-avatar">
                                                    <img src="<?=ROOT?>/assets/profil/cf.jpeg" alt="Retail Admin">
                                                    <div class="chat-name">Russell</div>
                                                </div>
                                                <div class="chat-text"><?= $chat->chat_content ?></div>
                                                <div class="chat-hour"><?= $chat->chat_date ?> <span class="fa fa-check-circle"></span></div>
                                            </li>
                                            <?php endforeach ?>
                                            
                                        </ul>
                                        <div class="form-group mt-3 mb-0">
                                            <textarea class="form-control" rows="3" placeholder="Type your message here..."></textarea>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Row end -->
                        </div>
                    </div>
                </div>
                <!-- Row end -->
            </div>
        <!-- Content wrapper end -->
        </div>

       