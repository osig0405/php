<?php 
// 函數顯示標題文字
function pageHeader() {
   print "<h3>PHP與MySQL網頁設計</h3>";
   echo "<hr/>";
} 
// 函數顯示註腳文字
function pageFooter() {
   print "<hr/>(c)Copyright by 周聖傑 & C111181127<br/>";
} 
?>
</head>
<body>
<?php 
pageHeader();  // 呼叫函數
print "<p>在PHP程式使用函數建立標題和註腳文字</p>";
pageFooter();  // 呼叫函數
?>