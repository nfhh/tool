<div class="list-group" id="a_box">
    <a href="/sn" class="list-group-item list-group-item-action">生成SN</a>
    <a href="/test" class="list-group-item list-group-item-action">测试结果列表</a>
    <a href="/weight" class="list-group-item list-group-item-action">SN与重量绑定</a>
</div>
<script>
    document.querySelectorAll('#a_box>a').forEach(a => {
        if (location.href.includes(a.getAttribute('href'))) {
            a.classList.add('active');
        }
    });
</script>
