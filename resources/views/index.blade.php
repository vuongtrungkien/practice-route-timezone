<div class="main-content">
    <h1>Ứng dụng xem giờ hiện tại của các thành phố trên thế giới</h1>
    <label for="select-city"></label>
    <select id="select-city">
        <option>Chọn thành phố</option>
        <option value="America-Chihuahua">Chihuahua, Mexico</option>
        <option value="America-Costa_Rica">Costa Rica</option>
        <option value="America-Havana">La Habana, Cuba</option>
        <option value="Asia-Hong_Kong">Hồng Kông</option>
        <option value="Asia-Ho_Chi_Minh">Hồ Chí Minh, Việt Nam</option>
    </select>
</div>
<div>
    <h4>Xem tuổi của bạn</h4>
    <form method="post"action="{{route('age')}}">
        @csrf
        <input type="date" name="birthday" >
        <input type="submit" value="Xem tuổi">
    </form>
    <p>Tuổi của bạn là : <?php echo $result ?></p>
</div>
<script>
    document.getElementById('select-city').onchange = function () {
        ChooseCity()
    };

    function ChooseCity() {
        let time_zone = document.getElementById("select-city");
        window.location.href = time_zone.value;
    }
</script>
