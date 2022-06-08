
let Right = document.getElementById('Right')
let sliders = document.getElementsByClassName("slide")
let i=0;
Right.addEventListener('click', function()
{
    ++i;
    if(i<sliders.length)
    {
    sliders[i-1].classList.remove("_block")
    sliders[i-1].classList.add("_noblock")
    sliders[i].classList.add("_block")
    sliders[i].classList.remove("_noblock")
    }
    if(i>=sliders.length)
    {
        sliders[0].classList.add("_block")
        sliders[0].classList.remove("_noblock")
        sliders[i-1].classList.add("_noblock")
        sliders[i-1].classList.remove("_block")
        i=0;
    }
}
)