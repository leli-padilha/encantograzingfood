import Image from "next/image"

export default function Whats(){
    return (
        <a href="https://wa.me/5554991257469" target="_blank" className="fixed bottom-5 right-5 z-10">
            <div className="transform transition duration-300 ease-in-out hover:scale-110">
                <Image src="/images/whats.webp" alt="WhatsApp" width={64} height={64} />
            </div>
        </a>
    )
}