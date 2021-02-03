import { MainEventBus } from "/workspace/front/libs/MainEventBus.lib.js";
import { Modaler } from "/workspace/front/libs/Modaler.lib.js";
import { _front } from "/workspace/front/_front.js";
import { frontConsultant } from './workspace/front/components/consultant/frontend/consultant.js';
import { Slider } from "/workspace/front/components/slider/frontend/slider.js"
class Front extends _front{
  constructor(){
    super();
    const _ = this;

    _.el = _.view.el;

    MainEventBus.add(_.componentName,'createOrderSuccess',_.createOrderSuccess.bind(_));
    MainEventBus.add(_.componentName,'createOrderFail',_.createOrderFail.bind(_));



    MainEventBus.add(_.componentName,'headBurgerClick',_.headBurgerClick.bind(_));

    MainEventBus.add(_.componentName,'asideShow',_.asideShow.bind(_));
    MainEventBus.add(_.componentName,'showItem',_.showItem.bind(_));

    MainEventBus.add(_.componentName,'countShow',_.countShow.bind(_));
    MainEventBus.add(_.componentName,'countChoose',_.countChoose.bind(_));

    MainEventBus.add(_.componentName,'showFeedback',_.showFeedback.bind(_));
    MainEventBus.add(_.componentName,'showShare',_.showShare.bind(_));
    MainEventBus.add(_.componentName,'shareCopy',_.shareCopy.bind(_));
    MainEventBus.add(_.componentName,'showCity',_.showCity.bind(_));
    MainEventBus.add(_.componentName,'showSertificate',_.showSertificate.bind(_));
    MainEventBus.add(_.componentName,'vacancyShow',_.vacancyShow.bind(_));
    MainEventBus.add(_.componentName,'showPassword',_.showPassword.bind(_));
    MainEventBus.add(_.componentName,'clearInput',_.clearInput.bind(_));

  }
  createOrderSuccess(orderData){
    console.log(orderData);
  }
  createOrderFail(orderData){}

  headBurgerClick(){
    const _ = this;
    let head = document.querySelector('.head');
    head.classList.toggle('active');
  }

  asideShow(clickData){
    const _ = this;
    let btn = clickData['item'];
    let menuItem = btn.parentElement;
    let list = menuItem.lastElementChild;
    menuItem.classList.toggle('active');
    if(menuItem.classList.contains('active')){
      let listHeight = list.offsetHeight;
      let buttonHeight = btn.offsetHeight;
      let height = listHeight + buttonHeight;
      menuItem.setAttribute('style',`height:${height}px`)
    } else {
      menuItem.removeAttribute('style')
    }
  }

  showItem(clickData){
    const _ = this;
    let event = clickData.event;
    event.preventDefault();
    let btn = clickData.item;
    let targetCls = btn.getAttribute('data-target');
    let target = document.querySelector(`.${targetCls}`);
    target.classList.toggle('active');
    if(target.classList.contains('active')) btn.classList.add('active');
    else btn.classList.remove('active')
  }

  countShow(){
    let select = document.querySelector('.count-select');
    select.classList.toggle('active')
  }
  countChoose(clickData){
    const _ = this;
    let btn = clickData.item;
    let input = document.querySelector('.count-input');
    let head = input.nextElementSibling.firstElementChild;
    input.value = btn.textContent;
    head.textContent = btn.textContent;
    _.countShow();
  }

  showFeedback(){
    Modaler.showModal({
      'content' : '.form-feedback',
      'contBgc' : '#E2F0FF',
      'border-radius' : '4px',
      'box-shadow' : '7px 11px 20px rgba(0, 0, 0, 0.16)'
    })
  }
  showShare(){
    Modaler.showModal({
      'content' : '.share',
      'closeBtn' : false
    })
  }
  shareCopy(clickData){
    const _ = this;
    let event = clickData.event;
    event.preventDefault();
    let path = location.href;
    let sp = document.getElementById('location');
    sp.textContent = path;
    let range = new Range();
    range.selectNodeContents(sp);
    document.getSelection().removeAllRanges();
    document.getSelection().addRange(range);
    document.execCommand('copy');
  }

  articlesLengthCheck(){
    const _ = this;
    let articles = document.querySelectorAll('.news .desc-text');
    if(articles.length) {
      articles.forEach(function(article) {
        if(window.innerWidth < 768) {
          if(article.textContent.length > 130) article.textContent = article.textContent.substr(0,130) + '...';
        }
        else {
          if(article.textContent.length > 230) article.textContent = article.textContent.substr(0,230) + '...';
        }
        article.setAttribute('style','display:block;')
      });
    }
  }

  currentPageCheck(){
    const _ = this;
    let headLinks = document.querySelectorAll('.head .item-link');
    let pageName = location.href;
    headLinks.forEach(function(link) {
      let linkWay = link.getAttribute("data-path");
      if(linkWay.length) {
        if(linkWay.indexOf(' ')){
          linkWay = linkWay.split(' ');
          for(let i = 0; i < linkWay.length; i++){
            if(pageName.indexOf(linkWay[i]) > -1) link.classList.add('active')
          }
        } else {
          if(pageName.indexOf(linkWay) > -1) link.classList.add('active')
        }
      }
    })
  }

  showCity(clickData){
    let cities = document.querySelectorAll('.map-dot');
    cities.forEach(function(el) {
      if(el.classList.contains('active')) el.classList.remove('active');
    });
    let curCity = clickData.item.parentElement;
    curCity.classList.add('active')
  }

  showSertificate(clickData){
    const _ = this;
    let sert = clickData.item.firstElementChild;
    Modaler.showModal({
      'content' : sert,
      'append' : false,
      'responsive' : {
        768: {
          'width' : '600px'
        },
        1200 : {
          'width' : '50vw'
        }
      }
    })
  }

  vacancyShow(clickData){
    const _ = this;
    let btn = clickData['item'];
    let cls = btn.getAttribute('data-cls');
    let main = document.querySelector(`.${cls}`);
    main.classList.toggle('active');
    let body = main.querySelector('.select-body');
    if(main.classList.contains('active')){
      let height = body.children.length * 28;
      body.setAttribute('style',`height:${height}px`)
    } else {
      let
          head = main.querySelector('.select-head'),
          input = main.querySelector('input');
      head.firstElementChild.textContent = btn.textContent;
      input.value = btn.textContent;
      body.removeAttribute('style')
    }
  }

  inputActive(){
    const _ = this;
    let inputs = document.querySelectorAll('.login .block-input');
    if(inputs.length) {
      inputs.forEach(function(inpt) {
        inpt.addEventListener('focus',function(e) {
          let cont = inpt.parentElement.parentElement;
          cont.classList.add('active')
        });
        inpt.addEventListener('focusout',function(e) {
          let cont = inpt.parentElement.parentElement;
          cont.classList.remove('active')
        })
      })
    }
  }
  showPassword(clickData){
    let button = clickData.item;
    let input = button.nextElementSibling.querySelector('.block-input');
    if (input.getAttribute('type') === 'password') input.setAttribute('type','text');
    else input.setAttribute('type','password');
  }
  clearInput(clickData){
    let button = clickData.item;
    let input = button.previousElementSibling;
    input.value = '';
    input.focus();
  }

  init(){
    const _ = this;
    _.currentPageCheck();
    _.articlesLengthCheck();
    _.inputActive();
    new Slider({
      container: '.main-slider',
      settings: {
        0:{
          dots: true,
          autoSwitch: true,
          animationTime: 0.5
        },
        740:{},
      }
    });
    new Slider({
      container: '.partners-slider',
      settings: {
        0:{
          dots: true,
          autoSwitch: true
        }
      }
    });
    new Slider({
      container: '.retailers-slider',
      dots: {
        container: `.retailers .multiple-slider-dots`
      },
      arrows:{
        container: '.retailers .multiple-slider-control',
        prev: `.retailers-prev`,
        next: `.retailers-next`
      },
      settings: {
        0:{
          count: 1,
          arrows: true,
          autoSwitch: true
        },
        740:{
          count: 2,
          moveCount: 1,
          dots: true
        },
        1004:{
          count: 3
        },
        1170:{
          width: 330,
          padding: '10px 0 20px'
        }
      }
    });
    new Slider({
      container: '.services-slider',
      dots: {
        container: '.services .multiple-slider-dots'
      },
      arrows:{
        container: '.services .multiple-slider-control',
        prev: `.services-prev`,
        next: `.services-next`
      },
      settings: {
        0:{
          count: 1,
          arrows: true,
          autoSwitch: true
        },
        740:{
          count: 2,
          dots: true
        },
        1004:{
          count: 3
        },
        1170:{
          width: 368,
          padding: '10px 0 20px',
        }
      }
    });
    new Slider({
      container: '.news-slider',
      dots: {
        container: `.news .multiple-slider-dots`
      },
      arrows: {
        container: `.news .multiple-slider-control`,
        next: '.news-next',
        prev: '.news-prev'
      },
      settings: {
        0:{
          count: 1,
          arrows: true,
          autoSwitch: true
        },
        740:{
          count: 2,
          dots: true
        },
        1004:{
          count: 3
        },
        1170:{
          width: 357,
          padding: '10px 0 20px'
        }
      }
    });
  }
}

new frontConsultant();
new Front();



