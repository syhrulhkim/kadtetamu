import React from 'react';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from '@/Components/ui/card';
import { Button } from '@/Components/ui/button';

export default function Dashboard() {
    return (
        <AuthenticatedLayout
            header={
                <h2 className="text-xl font-semibold leading-tight text-gray-800">
                    Dashboard
                </h2>
            }
        >
            <Head title="Dashboard" />

            <div className="py-12">
                <div className="mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <div className="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                        <div className="p-6 text-gray-900">
                            <h1 className="text-3xl font-bold mb-6">Welcome to your Dashboard!</h1>
                            <p className="text-muted-foreground mb-8">
                                You're logged in! This dashboard is built with Laravel 11, React, Inertia.js, and shadcn/ui.
                            </p>
                            
                            <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                                <Card>
                                    <CardHeader>
                                        <CardTitle className="text-blue-600">React Components</CardTitle>
                                        <CardDescription>
                                            Build interactive UIs with React
                                        </CardDescription>
                                    </CardHeader>
                                    <CardContent>
                                        <p className="text-sm text-muted-foreground">
                                            Modern React 18 with TypeScript and hot module replacement for fast development.
                                        </p>
                                        <Button className="mt-4" variant="outline" size="sm">
                                            Learn More
                                        </Button>
                                    </CardContent>
                                </Card>
                                
                                <Card>
                                    <CardHeader>
                                        <CardTitle className="text-green-600">Inertia.js</CardTitle>
                                        <CardDescription>
                                            SPA without the complexity
                                        </CardDescription>
                                    </CardHeader>
                                    <CardContent>
                                        <p className="text-sm text-muted-foreground">
                                            No API endpoints needed! Build single-page apps using classic server-side routing.
                                        </p>
                                        <Button className="mt-4" variant="outline" size="sm">
                                            Explore
                                        </Button>
                                    </CardContent>
                                </Card>
                                
                                <Card>
                                    <CardHeader>
                                        <CardTitle className="text-purple-600">Laravel 11</CardTitle>
                                        <CardDescription>
                                            Latest Laravel features
                                        </CardDescription>
                                    </CardHeader>
                                    <CardContent>
                                        <p className="text-sm text-muted-foreground">
                                            Leverage the latest Laravel features with improved performance and DX.
                                        </p>
                                        <Button className="mt-4" variant="outline" size="sm">
                                            Documentation
                                        </Button>
                                    </CardContent>
                                </Card>
                            </div>
                            
                            <Card>
                                <CardHeader>
                                    <CardTitle>🎨 shadcn/ui Components</CardTitle>
                                    <CardDescription>
                                        Beautiful, accessible components built with Radix UI and Tailwind CSS
                                    </CardDescription>
                                </CardHeader>
                                <CardContent className="space-y-4">
                                    <div className="flex flex-wrap gap-2">
                                        <Button>Primary Button</Button>
                                        <Button variant="secondary">Secondary</Button>
                                        <Button variant="outline">Outline</Button>
                                        <Button variant="ghost">Ghost</Button>
                                        <Button variant="destructive">Destructive</Button>
                                    </div>
                                    
                                    <div className="grid grid-cols-1 md:grid-cols-2 gap-4 pt-4">
                                        <div>
                                            <h4 className="font-semibold mb-2">✅ What's Included:</h4>
                                            <ul className="text-sm text-muted-foreground space-y-1">
                                                <li>• Laravel Breeze authentication</li>
                                                <li>• shadcn/ui component library</li>
                                                <li>• TypeScript support</li>
                                                <li>• Dark mode ready</li>
                                                <li>• Responsive design</li>
                                            </ul>
                                        </div>
                                        
                                        <div>
                                            <h4 className="font-semibold mb-2">🚀 Next Steps:</h4>
                                            <ul className="text-sm text-muted-foreground space-y-1">
                                                <li>• Explore authentication pages</li>
                                                <li>• Check out Components/ui directory</li>
                                                <li>• Add more shadcn/ui components</li>
                                                <li>• Start building your application!</li>
                                            </ul>
                                        </div>
                                    </div>
                                </CardContent>
                            </Card>
                            
                            <Card className="md:col-span-2 lg:col-span-3">
                                <CardHeader>
                                    <CardTitle>💒 Digital Wedding Card System</CardTitle>
                                    <CardDescription>
                                        Create beautiful digital wedding invitations with guest management
                                    </CardDescription>
                                </CardHeader>
                                <CardContent className="space-y-6">
                                    <div className="grid grid-cols-1 md:grid-cols-3 gap-4">
                                        <div className="text-center p-4 border rounded-lg">
                                            <div className="text-2xl mb-2">🎨</div>
                                            <h4 className="font-semibold mb-2">Browse Templates</h4>
                                            <p className="text-sm text-muted-foreground mb-3">
                                                Choose from 5 beautiful wedding card templates
                                            </p>
                                            <Button variant="outline" size="sm" asChild>
                                                <a href="/templates">View Templates</a>
                                            </Button>
                                        </div>
                                        
                                        <div className="text-center p-4 border rounded-lg">
                                            <div className="text-2xl mb-2">💳</div>
                                            <h4 className="font-semibold mb-2">My Cards</h4>
                                            <p className="text-sm text-muted-foreground mb-3">
                                                Manage your digital wedding cards
                                            </p>
                                            <Button variant="outline" size="sm" asChild>
                                                <a href="/cards">My Cards</a>
                                            </Button>
                                        </div>
                                        
                                        <div className="text-center p-4 border rounded-lg">
                                            <div className="text-2xl mb-2">👥</div>
                                            <h4 className="font-semibold mb-2">Guest Management</h4>
                                            <p className="text-sm text-muted-foreground mb-3">
                                                Add guests and track RSVPs
                                            </p>
                                            <Button variant="outline" size="sm" disabled>
                                                Create a Card First
                                            </Button>
                                        </div>
                                    </div>
                                    
                                    <div className="bg-gradient-to-r from-rose-50 to-pink-50 p-6 rounded-lg">
                                        <div className="flex items-center justify-between">
                                            <div>
                                                <h4 className="font-semibold text-rose-800 mb-2">Ready to get started?</h4>
                                                <p className="text-sm text-rose-600">
                                                    Create your first digital wedding card in minutes!
                                                </p>
                                            </div>
                                            <Button asChild>
                                                <a href="/templates">
                                                    Create Card
                                                </a>
                                            </Button>
                                        </div>
                                    </div>
                                </CardContent>
                            </Card>
                        </div>
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
