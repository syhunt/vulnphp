<html>
<script>
document.write('<? echo($_GET['city']); // XSS ?>');
</script>
</html>