<!DOCTYPE html>
<html>
    <style>
        body{
            text-align: center;
        }
        .letter{
            font-size: 90px;
            font-family: cursive;
            display: inline-block;
        }
        .letter.active{
            transform: scale(1.5) rotate(20deg);
            color: red;

        }
    </style>
    <head>
        <h1><span class="js-letter">BLEACH!</span></h1>
        <script>
            const h1 = document.querySelector("h1")
            const letters = h1.innerText.split('')
            let html = ""
            letters.forEach(letter=>{
                let classes = ''
                if(letter!==' '){
                    classes = 'letter js-letter'
                }
                html = html + `<span class ="${classes}">${letter}</span>`
            })
            h1.innerHTML = html
            const jsLetters = document.querySelectorAll(".js-letter")
            jsLetters.forEach(node=>{
                node.addEventListener("mouseover", function(event){
                    console.log(this.innerText)
                    this.classList.add("active")
                })
                node.addEventListener("mouseout", function(event){
                    console.log('out')
                    this.classList.remove("active")
                })
            })
            class Shinigami{
                constructor(name, position, division){
                    this.name = name
                    this.position = position
                    this.division = division
                    console.log(name, position, division)
                }
                makeSound(){
                    console.log(name+": BANKAI!")
                }
                getInfo(){
                    console.log(
                        this.name +
                        " is a " + this.position + 
                        " in the " + this.division +"\n"+"\n"
                    )
                }
            }

            class Vizards extends Shinigami{
                constructor(name, position, division){
                    super(name, position, division)
                    this.abilities = ["Cero", " Bala", " Hierro", " Sonido"]
                }
                voiceActor(){
                    console.log(`${this.name}'s voice actor is Masaya Onosaka.`)
                    console.log(`Shinji's hollow abilities are: ${this.abilities}.`)
                }
            }

            const rukia = new Shinigami("Rukia", "Lieutenant", "13th Division")
            rukia.makeSound()
            rukia.getInfo()
            const ichigo = new Shinigami("Ichigo", "Captain-level", "Non-union")
            ichigo.makeSound()
            ichigo.getInfo()
            const shinji = new Vizards("Shinji", "Captain", "5th Division")
            shinji.makeSound()
            shinji.getInfo()
            shinji.voiceActor()
        
        const mainCast ={
            "Ichigo":"World of the Living",
            "Rukia":"Soul Society",
            "Orihime":"Reverse London",
            "Chad":"Hueco Mundo",
            "Uryu":"Wandenreich"
        }

        let{
            Ichigo,
            ...rest
        } =mainCast
        console.log("Bleach supporting cast and their themes: ", rest)
</script>
<script src="randomizer.js"></script>
    <button onclick="randomizer();">Generate Password</button>
        <p id="randomizer" name="password"></p>
    </head>
<body>
    <?php include 'LLWD.php';?>
</body>
</html>