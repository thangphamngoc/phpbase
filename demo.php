<?php


require ('DB_business.php');
 
// Lớp khách hàng
class Customer extends DB_business 
{
    function __construct() 
    {
        // Khai báo tên bảng
        $this->_table_name = 'customer';
         
        // Khai báo tên field id
        $this->_key = 'id';
         
        // Gọi hàm khởi tạo cha
        parent::__construct();
    }
}
 
// Khởi tạo lớp khách hàng
$customer = new Customer();
 
// Thêm khách hàng
$customer->add_new(array(
    'name' => 'Nguyễn Văn Cường',
    'phone' => '0970 306 603'
));
 
// Xóa khách hàng
$customer->delete_by_id(1);
 
// Update khách hàng
$customer->update_by_id(array(
    'name' => 'thehalfheart'
), 2);
 
// Lấy chi tiết khách hàng
var_dump($customer->select_by_id('*', 2));




// require ('DB_driver.php');
 
// // Tạo Mới Đối Tượng
// $DB = new DB_driver();
 
// /// INSERT
// $DB->insert('customer', array(
//     'name' => 'Nguyễn Văn Cường',
//     'phone' => '0979306603'
// ));
 
// // UPDATE
// $DB->update('customer', array(
//     'name' => 'TheHalfHeart'
// ), 'id = 1');
 
// // DELETE
// $DB->remove('customer', 'id = 1');
 
// // GET LIST
// var_dump($DB->get_list('select * from customer'));
 
// // GET 1 ROW
// var_dump($DB->get_row('select * from customer where id  = 2'));