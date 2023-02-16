<style>
* {
  box-sizing: border-box;
}
body {
  min-height: 100vh;
  background: #000;
  color: #fff;
  display: flex;
  justify-content: center;
  align-items: center;
}
blockquote {
  font-size: 3rem;
}
cite {
  display: block;
  text-align: right;
  font-family: Verdana, Arial, sans-serif;
  margin-top: 1rem;
  font-size: .9rem;
  color: #aaa;
  font-style: normal;
}
blockquote q {
  font-family: Georgia, serif;
  font-style: italic;
  letter-spacing: .1rem;
}
blockquote q span { 
  will-change: opacity, filter;
  opacity: 0;
  filter: blur(0px);
}
q {
  quotes: "“" "”" "‘" "’";
}
q:before {
    content: open-quote;
    margin-right: .8rem;
}
q:after {
  content: close-quote;
}
q:before, q:after {
  color: #ccc;
  font-size: 4rem;
}
</style>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>

<script type="text/javascript">
function splitWords() {
  let quote = document.querySelector("blockquote q");
  quote.innerText.replace(/(<([^>]+)>)/ig,"");
  quotewords = quote.innerText.split(" "),
  wordCount = quotewords.length;
  quote.innerHTML = "";
  for (let i=0; i < wordCount; i++) {
    quote.innerHTML += "<span>"+quotewords[i]+"</span>";
    if (i < quotewords.length - 1) {
      quote.innerHTML += " ";
    }
  }
  quotewords = document.querySelectorAll("blockquote q span");
  fadeWords(quotewords);
}

function getRandom(min, max) {
  return Math.random() * (max - min) + min;
}

function fadeWords(quotewords) {
  Array.prototype.forEach.call(quotewords, function(word) {
    let animate = word.animate([{
      opacity: 0,
      filter: "blur("+getRandom(2,5)+"px)"
    }, {
      opacity: 1,
      filter: "blur(0px)"
    }], 
    { 
      duration: 1000,
      delay: getRandom(500,3300),
      fill: 'forwards'
    } 
   )
  })
}


splitWords();
</script>
<blockquote contenteditable="true"><q>What we think, we become.</q>
  <cite>Gautama Buddha</cite>
</blockquote>