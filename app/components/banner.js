'use client'

import Image from "next/image"

import React from 'react';
import { Swiper, SwiperSlide } from 'swiper/react';
import { Autoplay } from 'swiper/modules'; // Importar os módulos necessários
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

export default function Banner(){
    return (
        <section className="w-full pb-5">
            <Swiper
                modules={[Autoplay]}
                spaceBetween={30}
                slidesPerView={1}
                pagination={{ clickable: true }}
                navigation={false}
                autoplay={{ delay: 5000 }}
            >         
                <SwiperSlide>
                    <Image src="/images/banner_grazing.webp" alt="Seja bem vindo a Encanto Grazing Food" width={1920} height={0} className="w-full" />
                </SwiperSlide>
                <SwiperSlide>
                    <Image src="/images/banner_grazing2.webp" alt="Cestas criadas harmonizadas, estudadas com muito carinho" width={1920} height={0} className="w-full"/>
                </SwiperSlide>          
            </Swiper>
        </section>
    )
}