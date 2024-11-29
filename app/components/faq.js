'use client'

import { useState, useRef } from 'react';
import { FaChevronDown } from 'react-icons/fa';

const faqs = [
  {
    question: 'Quando é feito o pagamento?',
    answer: 'Pelo menos 50% do valor no momento que é feito o pedido.',
  },
  {
    question: 'Com quantos dias de antecedência preciso fazer o pedido?',
    answer: 'O ideal é pelo menos 24 horas de antecedência, porém se tiver disponibilidade dos itens e de agenda conseguimos montar em poucas horas.',
  },
  {
    question: 'Porque nosso produto Encanta quem consome?',
    answer: 'Temos muitos itens produzidos aqui na Encanto, de forma artesanal, que fazem muito sucesso. Tudo é preparado com muito carinho, cuidado e amor, sempre presando qualidade e excelência.',
  },
  {
    question: 'Balões personalizados, bolos recheados, biscoitos decorados, tem?',
    answer: 'Tem sim, temos parceiras para esses produtos, porém precisamos de pelo menos 48 hrs de antecedência no pedido.',
  },
  {
    question: '⁠Porque todos os produtos tem frutas?',
    answer: 'As frutas tem um papel bem especial nos nossos produtos, além de darem refrescância e colorido nas montagens elas servem para fazer a limpeza do paladar entre um item e outro.',
  }
];

export default function FAQ() {
  const [activeIndex, setActiveIndex] = useState(null);
  const contentRefs = useRef([]);

  const toggleFAQ = (index) => {
    setActiveIndex(activeIndex === index ? null : index);
  };

  return (
    <section className="bg-gradientFundo p-4 md:p-10">
        <div className="max-w-7xl m-auto flex flex-col lg:flex-row gap-5" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
            <h2 className="font-lhcencoreregular text-3xl font-medium text-center md:text-3xl xl:text-5xl">Perguntas Frequentes</h2>
            <div className="flex flex-col gap-4 xl:gap-6">
                {faqs.map((faq, index) => (
                    <div key={index} className="rounded-2xl bg-white shadow-md">
                        <button
                          className="w-full flex justify-between items-center p-4 text-left focus:outline-none"
                          onClick={() => toggleFAQ(index)} 
                        >
                            <span className="text-base font-semibold md:text-xl">{faq.question}</span>
                            <div className="w-3 h-4">
                              <FaChevronDown
                                  className={`w-3 h-4 text-gray-600 transition-transform duration-500 ${
                                  activeIndex === index ? 'rotate-180' : ''
                                  }`}
                              />
                            </div>
                        </button>
                        {/* Wrapper for the animated height */}
                        <div
                          ref={(el) => (contentRefs.current[index] = el)}
                          className={`overflow-hidden transition-all duration-500 ease-in-out`}
                          style={{
                              maxHeight: activeIndex === index ? contentRefs.current[index]?.scrollHeight : 0,
                          }}
                        >
                            <div className="p-4 text-gray-700 md:text-base">
                                {faq.answer}
                            </div>
                        </div>
                    </div>
                ))}
            </div>
        </div>
    </section>
  );
}
