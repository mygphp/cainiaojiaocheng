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

CSS修饰标签的样式，有 "内联" 和 "外引" 两种方式。
对于大部分标签，以上两种方法均可，且修改父级标签，子级标签特性也会改变。但某些标签确无法通过修改父级标签来改变子级标签特性，如a标签，修改其颜色特性，必须直接修改 a 标签的特性才可。
实例：
<a href="#" style="color：red;" rel="nofollow">只能使用"内联"方式</a>