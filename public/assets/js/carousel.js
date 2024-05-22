//1st Carousel
const carousel1 = document.getElementById('carousel1');

const willLeftLessThan40pxToScrollEnd = (nextStep) => {
    const scrollLeftAfterTwoClicks = carousel1.scrollLeft + (nextStep*2)
    return scrollLeftAfterTwoClicks > carousel1.scrollWidth - 40
}

const willLeftLessThan40pxToScrollStart = (nextStep) => {
    const scrollLeftAfterOneClick = carousel1.scrollLeft - nextStep
    return scrollLeftAfterOneClick < 40
}

const handleClickGoAhead = () => {
    let nextStep = carousel1.offsetWidth
    if(willLeftLessThan40pxToScrollEnd(nextStep)) nextStep *= 2

    carousel1.scroll({
      left: carousel1.scrollLeft + nextStep,
      behavior: "smooth"
    })
}

const handleClickGoBack = () => {
    let nextStep = carousel1.offsetWidth
    if(willLeftLessThan40pxToScrollStart(nextStep)) nextStep *= 2
    
    carousel1.scroll({
      left: carousel1.scrollLeft - nextStep,
      behavior: "smooth"
    })
}

//2nd Carousel
const carousel2 = document.getElementById('carousel2');

const willLeftLessThan40pxToScrollEnd2 = (nextStep) => {
    const scrollLeftAfterTwoClicks = carousel2.scrollLeft + (nextStep*2)
    return scrollLeftAfterTwoClicks > carousel2.scrollWidth - 40
}

const willLeftLessThan40pxToScrollStart2 = (nextStep) => {
    const scrollLeftAfterOneClick = carousel2.scrollLeft - nextStep
    return scrollLeftAfterOneClick < 40
}

const handleClickGoAhead2 = () => {
    let nextStep = carousel2.offsetWidth
    if(willLeftLessThan40pxToScrollEnd2(nextStep)) nextStep *= 2

    carousel2.scroll({
      left: carousel2.scrollLeft + nextStep,
      behavior: "smooth"
    })
}

const handleClickGoBack2 = () => {
    let nextStep = carousel2.offsetWidth
    if(willLeftLessThan40pxToScrollStart2(nextStep)) nextStep *= 2
    
    carousel2.scroll({
      left: carousel2.scrollLeft - nextStep,
      behavior: "smooth"
    })
}
