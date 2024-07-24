document.addEventListener("DOMContentLoaded", function () {
  var targetUrls = [
    "https://www.minato-yamaguchi.co.jp/minato/",
    "https://www.minato-yamaguchi.co.jp/minato",
  ];

  // すべてのaタグを取得
  var allAnchorTags = document.querySelectorAll("a");

  // 該当するaタグにblank_linkクラスを追加し、target属性をチェック
  allAnchorTags.forEach(function (anchor) {
    if (targetUrls.includes(anchor.href)) {
      anchor.classList.add("blank_link");

      // target属性が_blankの場合、さらにblank_link-iconクラスを追加
      if (anchor.target === "_blank") {
        anchor.classList.add("blank_link-icon");
      }
    }
  });
});
