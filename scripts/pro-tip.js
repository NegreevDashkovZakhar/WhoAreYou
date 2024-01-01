import {showPrompt} from './prompt.js';

const tips = [
  {
    title: 'Поработайте над правильной постановкой рук',
    text: `Одна из главных ошибок начинающего гитариста – излишняя спешка.
Пытаясь произвести впечатление на всех окружающих, пытаясь за месяц
выучить все свои любимые песни, молодые гитаристы не успевают проработать
правильную постановку правой и левой руки. При этом именно постановка определяет,
насколько быстро вы сможете играть, насколько игра будет чистой и экономичной с
физиологической точки зрения, то есть не будет сопровождаться перенапряжением.`,
  },
  {
    title: 'Никакого перенапряжения',
    text: `поставьте ваши руки и играйте так,
чтобы не чувствовать перенапряжения. Естественно на первых
порах это будет весьма сложной задачей: новый инструмент, физиологически
непривычные позы и движения, но подождите месяц-другой – и вы с гитарой практически
начнете становиться одним целым. Но только при условии, что вы все будете делать постепенно и правильно.`,
  },
  {
    title: 'Получайте удовольствие от игры',
    text: `Самый красноречивый показатель того, что вы занимаетесь правильным
делом – это чувство постоянного морального удовлетворения, кайфа во время
занятия этим дело. Игра на гитаре не исключение: наслаждайтесь игрой на
любимом инструменте, постоянно изучайте новые любимые песни и достигайте
новых вершин в игре – это поможет вам всегда быть на кураже, всегда иметь
искру и желание быть лучше других.`,
  },
  {
    title: 'Отстройте свою гитару',
    text: `Автомобилисты не ездят на машинах, у которых есть только 2 шины
из 4, а пилоты не летают на самолетах с кривыми крыльями. С гитарой все
аналогично: вы можете быть сколько угодно опытным музыкантом, но если в
руках у вас неотстроенный набор из деревянных элементов, электроники и фурнитуры,
то и выдавать осмысленные звуки вы на нем не сможете.`,
  },
];

const onLoad = () => {
  const tipIndex = Math.round(Math.random() * 3);
  const tip = tips[tipIndex];
  showPrompt(tip.title, tip.text);
};

document.addEventListener('DOMContentLoaded', onLoad);
