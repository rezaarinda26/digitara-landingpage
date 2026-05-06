/**
 * @license
 * SPDX-License-Identifier: Apache-2.0
 */

import { motion, useScroll, useTransform } from "motion/react";
import { 
  ArrowRight, 
  Code2, 
  Cpu, 
  Database, 
  Globe, 
  Layout, 
  Mail, 
  Menu, 
  Phone, 
  Rocket, 
  ShieldCheck, 
  Zap,
  Github,
  Twitter,
  Linkedin,
  ChevronRight,
  ExternalLink
} from "lucide-react";
import { useState, useEffect } from "react";

const services = [
  {
    title: "Enterprise Web Systems",
    description: "Robust, scalable web applications built with modern architectural patterns for high-performance business workflows.",
    icon: <Layout className="w-8 h-8" />,
    tags: ["React", "Node.js", "Microservices"]
  },
  {
    title: "Cloud Infrastructure",
    description: "Cloud-native solutions designed for maximum uptime and seamless scaling on AWS, Azure, and Google Cloud.",
    icon: <Database className="w-8 h-8" />,
    tags: ["DevOps", "Kubernetes", "Cloud Native"]
  },
  {
    title: "Cybersecurity Protocol",
    description: "Advanced security integration ensuring your data remains protected under the most stringent international standards.",
    icon: <ShieldCheck className="w-8 h-8" />,
    tags: ["Security Audit", "Encryption", "Compliance"]
  },
  {
    title: "AI Integration",
    description: "Leverage cutting-edge machine learning and predictive analytics to automate complex business processes.",
    icon: <Cpu className="w-8 h-8" />,
    tags: ["LLM", "Data Science", "Automation"]
  },
  {
    title: "API Ecosystems",
    description: "Seamlessly connect your legacy software with modern third-party services through powerful, documented APIs.",
    icon: <Code2 className="w-8 h-8" />,
    tags: ["REST", "GraphQL", "Integration"]
  },
  {
    title: "Digital Strategy",
    description: "Comprehensive IT consulting specializing in long-term digital growth and technological transformation.",
    icon: <Globe className="w-8 h-8" />,
    tags: ["Consulting", "Legacy Migration", "UX Strategy"]
  }
];

const portfolio = [
  {
    name: "Nexus Finance",
    category: "FinTech Platform",
    image: "https://images.unsplash.com/photo-1611162617474-5b21e879e113?auto=format&fit=crop&q=80&w=800",
  },
  {
    name: "Helix Health",
    category: "Medical CRM",
    image: "https://images.unsplash.com/photo-1576091160550-217359f49f4c?auto=format&fit=crop&q=80&w=800",
  },
  {
    name: "Vantage Logistics",
    category: "Supply Chain AI",
    image: "https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&q=80&w=800",
  }
];

export default function App() {
  const [isScrolled, setIsScrolled] = useState(false);
  const { scrollY } = useScroll();
  const heroOpacity = useTransform(scrollY, [0, 400], [1, 0]);
  const heroScale = useTransform(scrollY, [0, 400], [1, 0.95]);

  useEffect(() => {
    const handleScroll = () => setIsScrolled(window.scrollY > 20);
    window.addEventListener("scroll", handleScroll);
    return () => window.removeEventListener("scroll", handleScroll);
  }, []);

  return (
    <div className="min-h-screen bg-white">
      {/* Navigation */}
      <nav className={`fixed top-0 w-full z-50 transition-all duration-300 ${isScrolled ? "bg-white/90 backdrop-blur-md h-20 shadow-sm border-b border-slate-200" : "bg-transparent h-24"}`}>
        <div className="max-w-7xl mx-auto px-6 h-full flex justify-between items-center">
          <div className="flex items-center gap-2">
            <div className="w-8 h-8 bg-brand rounded-lg flex items-center justify-center">
              <div className="w-4 h-4 border-2 border-white rotate-45"></div>
            </div>
            <span className="text-xl font-bold tracking-tight text-brand uppercase">Digitara</span>
          </div>
          
          <div className="hidden md:flex items-center gap-8 text-sm font-medium text-slate-500">
            <a href="#services" className="hover:text-brand transition-colors">Solutions</a>
            <a href="#portfolio" className="hover:text-brand transition-colors">Portfolio</a>
            <a href="#about" className="hover:text-brand transition-colors">Company</a>
            <button className="px-6 py-2.5 bg-brand text-white rounded-full font-semibold shadow-brand hover:bg-brand-dark transition-all transform active:scale-95">
              Get Started
            </button>
          </div>
          
          <button className="md:hidden text-slate-900">
            <Menu className="w-6 h-6" />
          </button>
        </div>
      </nav>

      {/* Hero Section */}
      <section className="relative pt-32 pb-20 overflow-hidden min-h-screen flex items-center bg-slate-50">
        <div className="max-w-7xl mx-auto px-6 relative z-10 w-full grid lg:grid-cols-5 gap-12 items-center">
          <motion.div 
            style={{ opacity: heroOpacity, scale: heroScale }}
            initial={{ opacity: 0, x: -30 }}
            animate={{ opacity: 1, x: 0 }}
            transition={{ duration: 0.8, ease: "easeOut" }}
            className="lg:col-span-3"
          >
            <div className="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-slate-100 text-[10px] font-bold uppercase tracking-widest text-brand mb-6">
              <span className="w-1.5 h-1.5 bg-brand rounded-full animate-pulse"></span>
              Next-Gen IT Ecosystems
            </div>
            <h1 className="text-6xl lg:text-7xl font-extrabold text-slate-900 leading-[1.1] mb-8 tracking-tight">
              Engineering the <br />
              <span className="text-brand">Digital Future</span>
            </h1>
            <p className="text-slate-500 text-lg leading-relaxed mb-10 max-w-md">
              Digitara delivers high-performance custom web systems and cloud infrastructure designed for ambitious enterprise landscapes.
            </p>
            <div className="flex flex-wrap gap-4">
              <button className="px-8 py-4 bg-brand text-white rounded-xl font-bold shadow-brand hover:bg-brand-dark transition-all flex items-center gap-2 group">
                Explore Solutions
                <ArrowRight className="w-5 h-5 group-hover:translate-x-1 transition-transform" />
              </button>
              <button className="px-8 py-4 border border-slate-200 bg-white text-slate-700 rounded-xl font-bold hover:bg-slate-50 transition-all">
                View Case Studies
              </button>
            </div>
          </motion.div>

          <motion.div
            initial={{ opacity: 0, scale: 0.9 }}
            animate={{ opacity: 1, scale: 1 }}
            transition={{ duration: 1, ease: "circOut", delay: 0.2 }}
            className="lg:col-span-2 relative h-[500px] flex items-center justify-center"
          >
            <div className="relative w-80 h-80">
              <div className="absolute inset-0 bg-brand rounded-3xl opacity-10 rotate-12 scale-110 shadow-2xl"></div>
              <div className="absolute inset-0 bg-brand rounded-3xl opacity-20 rotate-6 scale-105"></div>
              <div className="absolute inset-0 bg-gradient-to-br from-brand to-brand-light rounded-3xl shadow-2xl flex items-center justify-center p-8 overflow-hidden">
                <div className="grid grid-cols-3 gap-3">
                  {[...Array(9)].map((_, i) => (
                    <div key={i} className={`w-12 h-12 rounded-lg backdrop-blur-md border border-white/30 ${i % 2 === 0 ? "bg-white/20" : "bg-white/10 shadow-inner"}`} />
                  ))}
                </div>
              </div>
              
              {/* Floating Geometric Elements */}
              <motion.div 
                animate={{ y: [0, -15, 0] }}
                transition={{ duration: 4, repeat: Infinity, ease: "easeInOut" }}
                className="absolute -top-12 -right-8 glass p-6 rounded-2xl shadow-xl w-40"
              >
                <div className="h-1.5 w-10 bg-slate-200 rounded mb-2"></div>
                <div className="h-1.5 w-14 bg-brand/40 rounded mb-4"></div>
                <div className="flex justify-between items-end h-10">
                  <div className="h-[60%] w-2 bg-brand rounded-t"></div>
                  <div className="h-[40%] w-2 bg-brand/60 rounded-t"></div>
                  <div className="h-[90%] w-2 bg-brand rounded-t"></div>
                  <div className="h-[50%] w-2 bg-brand/40 rounded-t"></div>
                </div>
              </motion.div>

              <motion.div 
                animate={{ x: [0, 10, 0] }}
                transition={{ duration: 5, repeat: Infinity, ease: "easeInOut", delay: 1 }}
                className="absolute -bottom-10 -left-12 glass p-4 rounded-xl shadow-2xl border border-slate-100 hidden sm:block"
              >
                <div className="flex items-center gap-3">
                  <div className="w-10 h-10 rounded-lg bg-brand/5 flex items-center justify-center text-brand">
                    <Database className="w-5 h-5" />
                  </div>
                  <div>
                    <div className="text-[10px] uppercase font-bold text-slate-400">Node Sync</div>
                    <div className="text-xs font-bold text-slate-900">Active clusters: 14</div>
                  </div>
                </div>
              </motion.div>
            </div>
          </motion.div>
        </div>
      </section>

      {/* Services Grid Section */}
      <section id="services" className="py-24 bg-slate-900 relative overflow-hidden">
        <div className="max-w-7xl mx-auto px-6">
          <div className="mb-20 grid lg:grid-cols-2 gap-8 items-end">
            <div>
              <div className="text-brand font-bold text-sm uppercase tracking-widest mb-4">Core Competencies</div>
              <h2 className="text-4xl md:text-5xl font-bold text-white leading-tight">
                Engineering Custom <br />
                Business Ecosystems.
              </h2>
            </div>
            <p className="text-slate-400 text-lg max-w-md pb-2">
              The Geometric series of our architecture ensures scalability, security, and extreme performance.
            </p>
          </div>

          <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-0 border border-white/10 rounded-[32px] overflow-hidden">
            {services.map((service, index) => (
              <motion.div
                key={index}
                initial={{ opacity: 0 }}
                whileInView={{ opacity: 1 }}
                viewport={{ once: true }}
                transition={{ delay: index * 0.1 }}
                className="group p-10 border-white/10 border-r border-b hover:bg-brand/10 transition-colors"
              >
                <div className="w-12 h-12 rounded-xl bg-brand/10 text-brand flex items-center justify-center mb-8 group-hover:scale-110 transition-transform duration-500">
                  {service.icon}
                </div>
                <h3 className="text-xl font-bold text-white mb-4">{service.title}</h3>
                <p className="text-slate-400 text-sm leading-relaxed mb-8">
                  {service.description}
                </p>
                <button className="flex items-center gap-2 text-brand font-bold text-sm group/btn">
                  Explore Tech
                  <ChevronRight className="w-4 h-4 group-hover/btn:translate-x-1 transition-transform" />
                </button>
              </motion.div>
            ))}
          </div>
        </div>
      </section>

      {/* Portfolio Showcase */}
      <section id="portfolio" className="py-24 bg-white">
        <div className="max-w-7xl mx-auto px-6">
          <div className="text-center max-w-3xl mx-auto mb-20">
            <div className="text-brand font-bold text-xs uppercase tracking-widest mb-4">Case Studies</div>
            <h2 className="text-4xl md:text-5xl font-bold text-slate-900 mb-6">Proven Architecture</h2>
            <p className="text-slate-500 text-lg">
              Proprietary solutions developed for industry leaders with a focus on geometric scalability.
            </p>
          </div>

          <div className="grid lg:grid-cols-3 gap-8">
            {portfolio.map((item, index) => (
              <motion.div
                key={index}
                initial={{ opacity: 0, scale: 0.95 }}
                whileInView={{ opacity: 1, scale: 1 }}
                viewport={{ once: true }}
                transition={{ delay: index * 0.1 }}
                className="group relative h-[500px] rounded-[32px] overflow-hidden cursor-pointer shadow-lg hover:shadow-2xl transition-all border border-slate-100"
              >
                <img 
                  src={item.image} 
                  alt={item.name} 
                  className="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700 group-hover:scale-105"
                  referrerPolicy="no-referrer"
                />
                <div className="absolute inset-0 bg-gradient-to-t from-slate-900/95 via-slate-900/40 to-transparent flex flex-col justify-end p-10">
                  <div className="text-brand-light font-bold text-[10px] uppercase tracking-[.2em] mb-3">
                    {item.category}
                  </div>
                  <h3 className="text-2xl font-bold text-white mb-6">{item.name}</h3>
                  <div className="flex items-center justify-between opacity-0 group-hover:opacity-100 transition-opacity translate-y-2 group-hover:translate-y-0 duration-300">
                    <span className="text-white/60 text-xs font-bold uppercase tracking-wider">Explore System</span>
                    <div className="w-12 h-12 rounded-xl bg-white/10 backdrop-blur-md flex items-center justify-center text-white border border-white/20">
                      <ExternalLink className="w-5 h-5" />
                    </div>
                  </div>
                </div>
              </motion.div>
            ))}
          </div>
        </div>
      </section>

      {/* CTA Section */}
      <section className="py-24 relative overflow-hidden bg-slate-50">
        <div className="max-w-7xl mx-auto px-6">
          <div className="bg-brand rounded-[48px] p-12 lg:p-24 text-center relative overflow-hidden shadow-2xl shadow-brand/30">
            {/* Geometric accents */}
            <div className="absolute top-0 right-0 w-64 h-64 bg-white/5 rounded-bl-[128px]" />
            <div className="absolute bottom-0 left-0 w-48 h-48 bg-black/5 rounded-tr-[96px]" />
            
            <motion.div
              initial={{ opacity: 0, y: 20 }}
              whileInView={{ opacity: 1, y: 0 }}
              viewport={{ once: true }}
              className="relative z-10"
            >
              <h2 className="text-4xl lg:text-6xl font-extrabold text-white mb-8 tracking-tight leading-tight">
                Engineering Your <br />
                Next Big Step.
              </h2>
              <p className="text-white/70 text-lg mb-12 max-w-2xl mx-auto">
                Connect with our systems architects to build the future of your enterprise infrastructure.
              </p>
              <div className="flex flex-wrap justify-center gap-6">
                <button className="px-10 py-5 bg-white text-brand rounded-xl font-bold text-lg hover:bg-slate-50 transition-all flex items-center gap-2 group shadow-xl">
                  Start Consultation
                  <ArrowRight className="w-5 h-5 group-hover:translate-x-1 transition-transform" />
                </button>
              </div>
            </motion.div>
          </div>
        </div>
      </section>

      {/* Footer */}
      <footer className="bg-slate-50 pt-20 pb-10 border-t border-slate-200">
        <div className="max-w-7xl mx-auto px-6">
          <div className="grid md:grid-cols-2 lg:grid-cols-4 gap-12 mb-20">
            <div className="col-span-2 lg:col-span-1">
              <div className="flex items-center gap-2 mb-6">
                <div className="w-8 h-8 bg-brand rounded-lg flex items-center justify-center">
                  <Zap className="text-white w-5 h-5 fill-current" />
                </div>
                <span className="text-xl font-bold tracking-tighter text-slate-900 uppercase">Digitara</span>
              </div>
              <p className="text-slate-500 text-sm leading-relaxed mb-8">
                Leading IT solutions provider specializing in high-end enterprise web systems and secure cloud infrastructure.
              </p>
              <div className="flex gap-4">
                {[Github, Twitter, Linkedin].map((Icon, i) => (
                  <a key={i} href="#" className="w-10 h-10 rounded-full bg-white border border-slate-200 flex items-center justify-center text-slate-400 hover:text-brand hover:border-brand transition-all">
                    <Icon className="w-5 h-5" />
                  </a>
                ))}
              </div>
            </div>
            
            <div>
              <h4 className="font-bold text-slate-900 mb-6 uppercase text-xs tracking-widest">Solutions</h4>
              <ul className="space-y-4 text-sm text-slate-500">
                <li><a href="#" className="hover:text-brand transition-colors">Custom Web Systems</a></li>
                <li><a href="#" className="hover:text-brand transition-colors">Cloud Migration</a></li>
                <li><a href="#" className="hover:text-brand transition-colors">Cybersecurity Audit</a></li>
                <li><a href="#" className="hover:text-brand transition-colors">AI Consulting</a></li>
              </ul>
            </div>

            <div>
              <h4 className="font-bold text-slate-900 mb-6 uppercase text-xs tracking-widest">Company</h4>
              <ul className="space-y-4 text-sm text-slate-500">
                <li><a href="#" className="hover:text-brand transition-colors">Case Studies</a></li>
                <li><a href="#" className="hover:text-brand transition-colors">Our Process</a></li>
                <li><a href="#" className="hover:text-brand transition-colors">Privacy Policy</a></li>
                <li><a href="#" className="hover:text-brand transition-colors">Contact</a></li>
              </ul>
            </div>

            <div>
              <h4 className="font-bold text-slate-900 mb-6 uppercase text-xs tracking-widest">Get in Touch</h4>
              <ul className="space-y-4 text-sm text-slate-500">
                <li className="flex items-start gap-3">
                  <Mail className="w-4 h-4 text-brand mt-1" />
                  hello@digitara.tech
                </li>
                <li className="flex items-start gap-3">
                  <Phone className="w-4 h-4 text-brand mt-1" />
                  +1 (555) 012-3456
                </li>
              </ul>
            </div>
          </div>
          
          <div className="flex flex-col md:flex-row justify-between items-center pt-10 border-t border-slate-200 gap-6">
            <p className="text-slate-400 text-xs text-center md:text-left">
              &copy; {new Date().getFullYear()} Digitara Global Solutions. All rights reserved. 
              Designed with precision for professional IT environments.
            </p>
            <div className="flex gap-8 text-[10px] uppercase font-bold tracking-widest text-slate-400">
              <a href="#" className="hover:text-brand">Security Status</a>
              <a href="#" className="hover:text-brand">Terms of Service</a>
            </div>
          </div>
        </div>
      </footer>
    </div>
  );
}
