<button class="primary_btn add_post_form_open_btn">&plus;</button>
    <section class="add-post-form-area">
        <button class="primary_btn add_post_form_close_btn">&cross;</button>
        <div class="main-content">
            <div class="form-area flex align-items-center justify-content-center" style="height: 100vh;">
                <form action="">
                    <h2>Create a new post your</h2>
                    <div class="input-box">
                        <label for="title">Post title <span>*</span></label>
                        <input type="text" name="first_name" id="first_name" placeholder="Enter post title"
                            style="width: 100%" required>
                    </div>
                    <div class="input-box">
                        <label for="post-desc">Post Description <span>*</span></label>
                        <textarea name="" id="post-desc" cols="30" rows="10" style="width: 100%"
                            placeholder="Enter post Description" required></textarea>
                    </div>
                    <div class="input-box">
                        <label for="post-img">Post image</label>
                        <input type="file" id="post-img" style="width: 100%" />
                    </div>
                    <div class=" flex justify-content-space-between">
                        <input class="primary_btn" type="submit" value="Add new post" />
                        <button class="primary_btn" type="reset">&circlearrowright;</button>
                    </div>
                </form>
            </div>
        </div>
    </section>