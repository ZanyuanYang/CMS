<?php
//
//if(isset($_POST['create_post'])){
//
//    global $connection;
//
//    $post_title = escape($_POST['title']);
//    $post_user = escape($_POST['post_user']);
//    $post_category_id = escape($_POST['post_category']);
//    $post_status = escape($_POST['post_status']);
//
//    $post_image = escape($_FILES['image']['name']);
//    $post_image_temp = escape($_FILES['image']['tmp_name']);
//
//    $post_tags = escape($_POST['post_tags']);
//    $post_content = escape($_POST['post_content']);
//    $post_date = escape(date('d-m-y'));
////    $post_comment_count = 4;
//
//    move_uploaded_file($post_image_temp, "../images/$post_image");
//
//    $query = "INSERT INTO posts(post_category_id, user_id, post_title, post_user, post_date, post_image, post_content, post_tags, post_status) ";
//
//    $query .="VALUES({$post_category_id}, {$_SESSION['user_id']} ,'{$post_title}','{$post_user}',now(),'{$post_image}','{$post_content}','{$post_tags}','{$post_status}')";
//
//    $create_post_query = mysqli_query($connection, $query);
//
//    confirmQuery($create_post_query);
//    $the_post_id = mysqli_insert_id($connection);
//    echo "<p class='bg-success'>Post Create. <a href='../post.php?p_id={$the_post_id}'>View Post</a> or <a href='posts.php'> Edit More Posts</a> </p>";
//}
//
//?>
<!---->
<!---->
<!---->
<!---->
<!--<form action="" method="post" enctype="multipart/form-data">-->
<!---->
<!--    <div class="form-group">-->
<!--        <label for="title">Post Title</label>-->
<!--        <input type="text" class="form-control" name="title">-->
<!--    </div>-->
<!---->
<!--    <div class="form-group">-->
<!--        <label for="categoty">Categoty</label>-->
<!--        <select name="post_category" id="post_category">-->
<!--            --><?php
//
//            global $connection;
//            $query = "SELECT * FROM categories ";
//            $select_categories= mysqli_query($connection, $query);
//
//            confirmQuery($select_categories);
//
//            while ($row = mysqli_fetch_assoc($select_categories)) {
//                $cat_id = $row['cat_id'];
//                $cat_title = $row['cat_title'];
//
//                echo "<option value='{$cat_id}'>{$cat_title}</option>";
//            }
//
//            ?>
<!---->
<!--        </select>-->
<!--    </div>-->
<!---->
<!--    <div class="form-group">-->
<!--        <label for="users">Users</label>-->
<!--        <select name="post_user" id="post_category">-->
<!--            --><?php
//
//            global $connection;
//            $users_query = "SELECT * FROM users ";
//            $select_users = mysqli_query($connection, $users_query);
//
//            confirmQuery($select_users);
//
//            while ($row = mysqli_fetch_assoc($select_users)) {
//                $user_id = $row['user_id'];
//                $username= $row['username'];
//
//                echo "<option value='{$username}'>{$username}</option>";
//            }
//
//            ?>
<!---->
<!--        </select>-->
<!--    </div>-->
<!---->
<!--    <div class="form-group">-->
<!--        <select name="post_status" id="">-->
<!--            <option value="draft">Post Status</option>-->
<!--            <option value="published">Published</option>-->
<!--            <option value="draft">Draft</option>-->
<!--        </select>-->
<!--    </div>-->
<!---->
<!--    <div class="form-group">-->
<!--        <label for="post_image">Post Image</label>-->
<!--        <input type="file" name="image">-->
<!--    </div>-->
<!---->
<!--    <div class="form-group">-->
<!--        <label for="post_tags">Post Tags</label>-->
<!--        <input type="text" class="form-control" name="post_tags">-->
<!--    </div>-->
<!---->
<!--    <div class="form-group">-->
<!--        <label for="post_content">Post Content</label>-->
<!--        <textarea class="form-control" name="post_content" id="body" colspan="30" rows="10"></textarea>-->
<!--    </div>-->
<!---->
<!--    <div class="form-group">-->
<!--        <input class="btn btn-primary" type="submit" name="create_post" value="Publish Post">-->
<!--    </div>-->
<!---->
<!---->
<!--</form>-->










<!--<div class="form-group">-->
<!--    <select name="post_status" id="">-->
<!--        <option value="draft">Post Status</option>-->
<!--        <option value="published">Published</option>-->
<!--        <option value="draft">Draft</option>-->
<!--    </select>-->
<!--</div>-->
<div class="col-sm-9">
    <form class="form form-inline add-box-form">
        <table>
            <tbody>
                <tr>
                    <td>
                        <label for="is_small_box">0.01 </label> <input type="checkbox" style="width: 20px; height: 20px" id="is_small_box" name="is_small_box">
                    </td>
                    <td style="padding: 10px">
                        <label>公斤</label>
                        <input type="text" name="weight" id="weight" class="form-control" disabled="">
                    </td>
                    <td rowspan="3" style="font-size: 40px;padding-left: 30px" class="return-box-no">

                    </td>
                </tr>

                <tr>
                    <td>
                        <label>中国快递单号</label>
                    </td>
                    <td style="padding:10px">
                        <input type="text" class="form-control" name="tracking_no">
                    </td>
                </tr>

                <tr>
                    <td>
                        <label>客户代码</label>
                    </td>
                    <td style="padding:10px">
                        <input type="text" class="form-control" id="user_code" name="user_code" style="text-transform: uppercase">
                    </td>
                </tr>

                <tr>
                    <td>
                        <label>运输方式</label>
                    </td>
                    <td style="padding:10px">
                        <select name="transition_way" onchange="$('.shipping_mode').val($(this).val())" class="form-control">
                            <option value="1">รถธรรมดา 普通 陆运</option>
                            <option value="2">เรือธรรมดา 普通 海运</option>
                            <option value="3">เครื่องบิน 空运</option>
                            <option value="4">รถมอก 特殊 陆运</option>
                            <option value="5">ไม่เหมาตู้ทางรถ</option>
                            <option value="6">เหมาตู้ทางเรือ</option>
                            <option value="7">ขนส่งในประเทศ(สินค้าตีกลับ) 在国内</option>
                        </select>
                        <input type="hidden" class="shipping_mode" name="shipping_mode" value="1">
                    </td>
                </tr>

                <tr>
                    <td>
                        <label>包装费</label>
                    </td>
                    <td style="padding:10px">
                        <input type="text" class="form-control" name="packing_cost">泰铢
                    </td>
                </tr>

                <tr>
                    <td>
                        <label>打木架</label>
                    </td>
                    <td style="padding: 10px">
                        <input style="width: 20px; height: 20px" type="checkbox" name="crated" value="1">
                    </td>
                </tr>

                <tr>
                    <td>
                        <label>打托盘</label>
                    </td>
                    <td style="padding: 10px">
                        <input style="width: 20px; height: 20px" type="checkbox" name="palletized" value="1">
                    </td>
                </tr>

                <tr>
                    <td>
                        <label>箱数</label>
                    </td>
                    <td style="padding: 10px">
                        <select name="box_numbers" class="form-control">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>
                            <option>13</option>
                            <option>14</option>
                            <option>15</option>
                            <option>16</option>
                            <option>17</option>
                            <option>18</option>
                            <option>19</option>
                            <option>20</option>
                            <option>21</option>
                            <option>22</option>
                            <option>23</option>
                            <option>24</option>
                            <option>25</option>
                            <option>26</option>
                            <option>27</option>
                            <option>28</option>
                            <option>29</option>
                            <option>30</option>
                            <option>31</option>
                            <option>32</option>
                            <option>33</option>
                            <option>34</option>
                            <option>35</option>
                            <option>36</option>
                            <option>37</option>
                            <option>38</option>
                            <option>39</option>
                            <option>40</option>
                            <option>41</option>
                            <option>42</option>
                            <option>43</option>
                            <option>44</option>
                            <option>45</option>
                            <option>46</option>
                            <option>47</option>
                            <option>48</option>
                            <option>49</option>
                            <option>50</option>
                            <option>51</option>
                            <option>52</option>
                            <option>53</option>
                            <option>54</option>
                            <option>55</option>
                            <option>56</option>
                            <option>57</option>
                            <option>58</option>
                            <option>59</option>
                            <option>60</option>
                            <option>61</option>
                            <option>62</option>
                            <option>63</option>
                            <option>64</option>
                            <option>65</option>
                            <option>66</option>
                            <option>67</option>
                            <option>68</option>
                            <option>69</option>
                            <option>70</option>
                            <option>71</option>
                            <option>72</option>
                            <option>73</option>
                            <option>74</option>
                            <option>75</option>
                            <option>76</option>
                            <option>77</option>
                            <option>78</option>
                            <option>79</option>
                            <option>80</option>
                            <option>81</option>
                            <option>82</option>
                            <option>83</option>
                            <option>84</option>
                            <option>85</option>
                            <option>86</option>
                            <option>87</option>
                            <option>88</option>
                            <option>89</option>
                            <option>90</option>
                            <option>91</option>
                            <option>92</option>
                            <option>93</option>
                            <option>94</option>
                            <option>95</option>
                            <option>96</option>
                            <option>97</option>
                            <option>98</option>
                            <option>99</option>
                            <option>100</option>
                        </select>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
    <div class="panel panel-default" id="status"></div>
    
</div>


