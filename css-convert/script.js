var lCSSCoder = {
		format: function (s) {//格式化代碼
			s = s.replace(/\s*([\{\}\:\;\,])\s*/g, "$1");
			s = s.replace(/;\s*;/g, ";"); //清除連續分號
			s = s.replace(/\,[\s\.\#\d]*{/g, "{");
			s = s.replace(/([^\s])\{([^\s])/g, "$1 {\n\t$2");
			s = s.replace(/([^\s])\}([^\n]*)/g, "$1\n}\n$2");
			s = s.replace(/([^\s]);([^\s\}])/g, "$1;\n\t$2");
			return s;
		},
		packAdv: function (s) {//高級壓縮代碼
			s = s.replace(/\/\*(.|\n)*?\*\//g, ""); //刪除注釋
			s = s.replace(/\s*([\{\}\:\;\,])\s*/g, "$1");
			s = s.replace(/\,[\s\.\#\d]*\{/g, "{"); //容錯處理
			s = s.replace(/;\s*;/g, ";"); //清除連續分號
			s = s.match(/^\s*(\S+(\s+\S+)*)\s*$/); //去掉首尾空白
			return (s == null) ? "" : s[1];
		},
		pack: function (s) {//普通壓縮包
		s = s.replace(/\/\*(.|\n)*?\*\//g, ""); //刪除注釋
		s = s.replace(/\s*([\{\}\:\;\,])\s*/g, "$1");
		s = s.replace(/\,[\s\.\#\d]*\{/g, "{"); //容錯處理
		s = s.replace(/;\s*;/g, ";"); //清除連續分號
		s = s.replace(/;\s*}/g, "}"); //清除末尾分號和大括號
		s = s.replace(/([^\s])\{([^\s])/g, "$1{$2");
		s = s.replace(/([^\s])\}([^\n]s*)/g, "$1}\n$2");
		return s;
		}
};
function CSS(s){
	document.getElementById("packer").value = lCSSCoder[s](document.getElementById("code").value);
}