<script>
    function myFunction(ttt) {
    let x = document.getElementById(ttt);
    x.value = (x.value).toUpperCase();


}

    function selectClass(){
        document.getElementById('stream-select').style.display="inline-block";
    }

    function popup(arg){
      var tag = document.getElementById(arg).style;
      if(tag.display=='none'){
        tag.display='flex';

      }else{
        tag.display='none';
      }
    }
</script>