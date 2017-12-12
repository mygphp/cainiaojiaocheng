文本显示为单行,超过部分隐藏并使用省略号
div {
  overflow:hidden;
  text-overflow:ellipsis;
  white-space:nowrap;
  width:120px;
}


使用 display:-webkit-box; 让文本显示为多行(只有-webkit内核才有作用)
文本显示为两行,超过部分隐藏并使用省略号
div {
  display:-webkit-box;
  text-overflow:ellipsis;
  overflow:hidden;
  width:100px;
  -webkit-line-clamp: 2;
  -webkit-box-orient:vertical;
}