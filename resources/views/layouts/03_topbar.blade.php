
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <label>
                        <h1 style="color: #e5c29f; text-shadow: none;">Welcome {{Session::get("username")}}!</h1>
                    </label>
                </div>

                <div class="user">
                    <img src="/image_uploads/{{Session::get("user_id")}}.jpg" alt="">
                </div>
            </div>