// 定义MySQL数据库的连接信息
$host = 'mysql-service';
$user = 'root';
$pass = 'password';
$dbname = 'testdb';

// 创建MySQL连接对象
$conn = new mysqli($host, $user, $pass, $dbname);

// 检查连接是否成功
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 

// 执行查询操作
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

// 处理查询结果
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. "<br>";
    }
} else {
    echo "0 结果";
}

// 关闭连接
$conn->close();